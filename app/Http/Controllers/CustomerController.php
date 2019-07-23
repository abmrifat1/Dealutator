<?php

namespace App\Http\Controllers;

use App\Customer;
use Session;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    public function customer(){

        return view('front.customer.customer-login');
    }

    public function saveCustomerInfo(Request $request){
        $this->validate($request,[
            'first_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'last_name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:customers,email',
            'password'=>'required|max:20|min:6',
            'phone_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
        ]);
        $customer=new Customer();
        $customer->first_name=$request->first_name;
        $customer->last_name=$request->last_name;
        $customer->email=$request->email;
        $customer->password=bcrypt($request->password);
        $customer->phone_number=$request->phone_number;

        $customer->save();
        $customerId=$customer->id;

        Session::put('customerId',$customerId);
        Session::put('customerName',$request->first_name.' '.$request->last_name);

        return redirect('/');
    }

    public function customerLogin(Request $request){



        $customer=Customer::where('email',$request->email)->first();


        if($customer) {

            if (password_verify($request->password,$customer->password)) {



                Session::put('customerId', $customer->id);
                Session::put('customerName', $customer->first_name .' '. $customer->last_name);


                return redirect('/');
            } else {

                return redirect('/customer')->with('message', 'Invalid  password');
            }
        }
        else{
            return redirect('/customer')->with('message', 'Invalid  mail');
        }

    }
}
