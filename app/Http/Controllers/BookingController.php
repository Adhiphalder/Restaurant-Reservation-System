<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;



class BookingController extends Controller
{
    public function view(){
        return view('payment_booking.booking');
    }


    public function booking(Request $request){

        $booking = new Booking;

        $booking->date = $request['date'];
        $booking->time = $request['time'];
        $booking->guest_no = $request['guest_no'];
        $booking->seat_no = $request['gnum'];
        $booking->save();
        return redirect('/');
    }

    public function table_view(){
        return view('payment_booking.booktable');
    }
}
