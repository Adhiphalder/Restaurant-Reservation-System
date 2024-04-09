<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Bookingk;

class CustomerController extends Controller
{
    public function profile(){
        $customers = Customer::all();
        return view('Profile.profile', ['customers' => $customers]);
    }


    public function booking() {
        return view('payment_booking.booking');
    }

    public function view(Request $request){

        echo "<pre>";
        print_r($request->all());

        $booking = new Bookingk;
        $booking->date = $request['date'];
        $booking->time = $request['time'];
        $booking->guest_no = $request['guest_no'];
        $booking->seat_no = $request['gnum'];
        $booking->save();
    }
    
}
