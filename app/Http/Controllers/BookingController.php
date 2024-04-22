<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use App\Models\Payment;

use App\Models\BookingCancellation;

use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function view(){
        // return view('payment_booking.booking');

        $bookings = Booking::all();

        return view('payment_booking.booking', ['bookings' => $bookings]);
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

    // public function cancelBooking($id)
    // {
    //     // $booking = Booking::findOrFail($id);
    //     // $booking->delete(); 

    //     // return redirect()->back()->with('success', 'Booking canceled successfully');

    //     logger()->info('Cancel booking method called.');
    //     $booking = Booking::findOrFail($id);
    //     logger()->info('Booking found:', $booking);
        
    //     $booking->delete(); 
    //     logger()->info('Booking soft deleted.');

    //     return redirect()->back()->with('success', 'Booking canceled successfully');
    // }

    // public function approveCancellation($id)
    // {
    //     $booking = Booking::onlyTrashed()->findOrFail($id);
    //     $booking->forceDelete();

    //     return redirect()->route('bookcancle')->with('success', 'Booking cancellation approved');
    // }

    // public function denyCancellation($id)
    // {
    //     $booking = Booking::onlyTrashed()->findOrFail($id);
    //     $booking->restore();
    //     return redirect()->back()->with('success', 'Booking cancellation denied');
    // }

    public function table_view(){
        return view('payment_booking.booktable');
    }

    public function cancelBooking($id)
    {
        // $booking = Booking::find($id);
        Booking::find($id)->delete();
        // $booking->delete(); 

        return redirect()->back()->with('success', 'Booking canceled successfully');
    }
}
