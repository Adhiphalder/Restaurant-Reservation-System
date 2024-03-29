<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function profile(){
        return view('Profile.profile');
    }
    public function booking_history(){
        return view('Profile.booking_history');
    }
}
