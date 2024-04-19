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
    
        $request->session()->put('customer', $customer);
    
        Session::flash('success', 'Sign up successful!');

        return redirect('/');

    }

    public function login(Request $request){


        $customer = Customer::where("email", $request->input('email'))->first();

        if ($customer && Hash::check($request->input('password'), $customer->password)) {

            $request->session()->put('customer', $customer);
            $request->session()->put('customer_id', $customer->id);
            return redirect('/');
        } else {

            return redirect()->back()->with('error', 'Invalid email or password');
        }
        
    }

    public function logout(Request $request)
    {

  
    $request->session()->forget('customer');

    $request->session()->forget('customer_id');

    // Logout user
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home')->with('success', 'Logged out successfully.');

    }

}
