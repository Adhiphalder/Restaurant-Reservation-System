<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Crypt;

use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // // Display the login form
    public function index()
    {
        return view('login');
    }

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
        $request->session()->put('name', $request->input('name'));

            // Flash success message
    Session::flash('success', 'Sign up successful!');

        return redirect()->back();


    }

    public function login(Request $request){

        $customer = Customer::where("email", $request->input('email'))->first();

        if ($customer && Hash::check($request->input('password'), $customer->password)) {
            $request->session()->put('customer', $customer->name);
            return redirect('/');
        } else {
            // Handle invalid login attempt
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('customer');
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }

}
