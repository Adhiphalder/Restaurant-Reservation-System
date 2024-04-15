<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function view(){
        return view('payment_booking.booking');
    }


    public function booking(Request $request){

        // $booking = new Booking;

        // $booking->date = $request['date'];
        // $booking->time = $request['time'];
        // $booking->guest_no = $request['guest_no'];
        // $booking->seat_no = $request['gnum'];
        // $booking->save();
        // // return redirect('/');

        // return redirect()->back()->with('success', 'Booking created successfully!');


        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            'guest_no' => 'required|integer|min:1',
            'gnum' => 'required',
        ]);
        


        $customer = Session::get('customer');
        
        if (!$customer) {
            return redirect()->back()->with('error', 'Customer data not found in session.');
        }
        
        $customerId = $customer->customer_id; 
        

        $booking = new Booking;
        $booking->customer_id = $customerId;
        $booking->date = $request->input('date');
        $booking->time = $request->input('time');
        $booking->guest_no = $request->input('guest_no');
        $booking->seat_no = $request->input('gnum');
        $booking->save();
        

        Session::put('booking_date', $request->input('date'));
        Session::put('booking_time', $request->input('time'));
        Session::put('guest_no', $request->input('guest_no'));
        Session::put('seat_no', $request->input('gnum'));

        // return redirect()->back()->with('success', 'Booking created successfully!');
    return redirect()->route('home')->with('success', 'Booking created successfully');


    }

    public function table_view(){
        return view('payment_booking.booktable');
    }
}
