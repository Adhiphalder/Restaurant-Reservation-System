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
    
    public function menu(){
        return view('payment_booking.menu');
    }

    public function booking(){
        return view('payment_booking.booking');
    }

    public function booktable(){
        return view('payment_booking.booktable');
    }
}
