<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;


class CustomerController extends Controller
{
    public function profile(){
        if (!Session::has('customer')) {
            return redirect()->route('signup')->with('error', 'Please log in to view bookings.');
        }
        $customers = Customer::all();
        return view('Profile.profile', ['customers' => $customers]);
    }
    
}
