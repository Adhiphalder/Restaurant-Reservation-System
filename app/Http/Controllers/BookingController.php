<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use App\Models\Payment;

use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function view(){
        return view('payment_booking.booking');
    }


    public function booking(Request $request){


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

    Session::put('booking_id', $booking->booking_id);

    Session::put('booking_date', $request->input('date'));
    Session::put('booking_time', $request->input('time'));
    Session::put('guest_no', $request->input('guest_no'));
    Session::put('seat_no', $request->input('gnum'));

    logger()->info('Booking ID stored in session: ' . Session::get('booking_id'));

    return redirect()->route('booktable')->with('success', 'Booking created successfully');
    }

    public function table_view(){
        return view('payment_booking.booktable');
    }
}
