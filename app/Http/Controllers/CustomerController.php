<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Add Customer Page
     */
    public function addCustomer(){
        return view('addCustomer');
    }

    /**
     * Add Customer Fun
     */
    public function add(){
       // Validation
       $validator = validator(request()->all(), [
        'name' => 'required',
        'phone' => 'required',
        'zipcode' => 'required',
        'perfecture' => 'required',
        'city' => 'required',
        'address' => 'required',
        'facebook_url' => 'required'
        ]); 

        if($validator->fails()){
            return back()->withErrors($validator);
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
     * Sub Fun
     */
    public function createCustomer(array $data){
        

        return $customer;
    }
}
