<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view ('login');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'contact' => 'required',
                'address' => 'required'
        ]
    );   
    //     echo "<pre>";
    //     print_r($request->all());

        $customer = new Customer;
        $customer->name= $request['name'];
        $customer->email= $request['email'];
        $customer->address= $request['address'];
        $customer->contact= $request['contact'];
        $customer->password= bcrypt($request['password']);
        $customer->save();

        Session::flash('success', 'Sign up successful!');

        return redirect()->back();
    }



  
}
