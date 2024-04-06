<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Display the login form
    public function index()
    {
        return view('login');
    }

    // Handle user login
    public function store(Request $request)
    {
        // Logic for handling login goes here

        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/welcome');
        }

        // Authentication failed
        Session::flash('error', 'Invalid credentials');
        return redirect()->back();
    }

    // Handle user registration (sign up)
    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'password' => 'required',
            'contact' => 'required',
            'address' => 'required'
        ]);

        $customer = new Customer;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->contact = $request->contact;
        $customer->password = bcrypt($request->password);
        $customer->save();

        Session::flash('success', 'Sign up successful!');

        return redirect()->back();
    }
}
