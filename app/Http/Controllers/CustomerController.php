<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Add Customer Page
     */
    public function addCustomer(){
        $customer = new Customer;
        return view('addCustomer')->with('customer',$customer);
    }

    /**
     * Add Customer Fun
     */
    public function add(){
       // Validation
       $validator = validator(request()->all(), [
        'name' => 'required'
        ]); 

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $customer = new Customer;
        $customer->name = request()->name;
        $customer->phone = request()->phone;
        $customer->zipcode = request()->zipcode;
        $customer->perfecture = request()->perfecture;
        $customer->city = request()->city;
        $customer->address = request()->address;
        $customer->facebook_url = request()->facebook_url;

        $customer->save();
        return redirect("home")->withSuccess('Successfully Added.');
    }

    /**
     * Detail
     */
    public function detail($id){
        $customer = Customer::find($id);
        return view('detailCustomer')->with('customer',$customer);
    }

    /**
     * Edit Customer Page
     */
    public function editCustomer($id){
        $customer = Customer::find($id);
        return view('editCustomer')->with('customer',$customer);
    }

    /**
     * Edit Customer Fun
     */
    public function edit(){
        // Validation
        $validator = validator(request()->all(), [
         'name' => 'required'
         ]); 
 
         if($validator->fails()){
             return back()->withErrors($validator)->withInput();
         }

         $customerArr = array('name'=>request()->name, 
                            'phone'=>request()->phone,
                            'zipcode'=>request()->zipcode , 
                            'perfecture'=>request()->perfecture, 
                            'city'=>request()->city, 
                            'address'=>request()->address, 
                            'facebook_url'=>request()->facebook_url);
 
         DB::table('customers')
                    ->where('id', request()->id)
                    ->update($customerArr);

         return redirect("home")->withSuccess('Successfully Updated.');
     }

     /**
     * Delete Customer Page | Fun
     */
    public function deleteCustomer($id){
        $customer = Customer::find($id);
        DB::table('customers')
                    ->where('id', '=', $id)
                    ->delete();

        return redirect("home")->withSuccess('Successfully Deleted.');
    }
}
