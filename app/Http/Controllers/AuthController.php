<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use App\Customer;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use DataTables;

class AuthController extends Controller
{
    /** 
     * Login Page
     */ 
    public function index(){
        return view('auth.login');
    }

    /**
     * Login Fun
     */
    public function login(Request $request){
        // Validation
        $validator = validator(request()->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $user = $request->only('email', 'password');
        if(Auth::attempt($user)){
            return redirect()->intended('home');
        }
        return redirect("login")->withSuccess('Input values are wrong.')->withInput();
    }

    /**
     * Home Page
     */
    public function home(Request $request){
        if(Auth::check()){
            if ($request->ajax()) {
                $data = Customer::latest()->get();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('combileAddress', function($row){
                            return $row->zipcode . " " . $row->perfecture . " " . $row->city . " " . $row->address ;
                        })
                        ->rawColumns(['combileAddress'])
                        ->addColumn('action', function($row){
                            return $this->getActionColumn($row);
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('auth.home');
        }
        return redirect("login")->withSuccess('Access is not permitted.');
    }

    protected function getActionColumn($data): string
    {
        $showUrl = route('detail', $data->id);
        return "<a class='btn btn-primary btn-sm' data-value='$data->id' href='$showUrl'>Detail</a>";
    }

    /**
     * Logout
     */
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect("login");
    }

    /**
     * Register Page
     */
    public function register(){
        return view('auth.register');
    }

    /**
     * Register Fun
     */
    public function userRegister(Request $request){
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        $data = $request->all();
        $check = $this->createUser($data);
        return redirect("home")->withSuccess('Successfully logged-in.');
    }

    /**
     * Create User Fun
     */
    public function createUser(array $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

}
