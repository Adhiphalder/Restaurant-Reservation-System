<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class booking extends Controller
{
    public function booking(){
        return view("payment_booking.booking");
    }

    public function booktable(){
        return view("payment_booking.booktable");
    }


}
