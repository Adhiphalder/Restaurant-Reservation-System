<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function profile(){
        $customers = Customer::all();
        return view('Profile.profile', ['customers' => $customers]);
    }
    
}
