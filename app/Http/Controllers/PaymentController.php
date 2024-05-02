<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Customer;    
use App\Models\Booking;
use App\Models\Review;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;


class PaymentController extends Controller
{
    public function pay_successful(){

        if (!Session::has('customer')) {
            return redirect()->route('signup')->with('error', 'Please log in to view bookings.');
        }
    
        if (!Session::has('booking_id')) {
            return redirect()->route('booking')->with('error', 'You need to make a booking first.');
        }

        if (!Session::has('table_id')) {
            return redirect()->route('booktable')->with('error', 'You need to select a table first.');
        }

        if (!Session::has('payment_id')) {
            return redirect()->route('payment')->with('error', 'You need to complete the payment first.');
        }
        
        return view('payment_booking.payment_successful');
    }


    public function view(){
        
        // if (!Session::has('customer')) {
        //     return redirect()->route('signup')->with('error', 'Please log in to view bookings.');
        // }
    
        // if (!Session::has('booking_id')) {
        //     return redirect()->route('booking')->with('error', 'You need to make a booking first.');
        // }

        // if (!Session::has('table_id')) {
        //     return redirect()->route('booktable')->with('error', 'You need to select a table first.');
        // }
    
        return view('payment_booking.payment');

    }

    public function payment(Request $request){


    $customerId = Session::get('customer.customer_id');
    $bookingId = Session::get('booking_id');

    $paymentId = Session::get('payment_id');

    if (!$paymentId) {
        $payment = new Payment;
        $payment->customer_id = $customerId;
        $payment->booking_id = $bookingId; 
        $payment->amount = 200; 

        $paymentMethod = $request->input('p_method');

        if ($paymentMethod !== 'upi' && $paymentMethod !== 'card') {
            return redirect()->back()->with('error', 'Invalid payment method selected.');
        }

        $payment->paymethod = $paymentMethod; 
        $payment->current_time = now(); 

        $payment->save();

        Session::put('payment_id', $payment->payment_id);

        logger()->info('Payment created with booking ID: ' . $payment->booking_id);
        } else {
            $payment = Payment::findOrFail($paymentId);
        }

    $booking = Booking::findOrFail($bookingId);

    Session::put('date', $booking->date);
    Session::put('time', $booking->time);
    Session::put('guest_no', $booking->guest_no);

    Session::put('current_date', Carbon::now()->format('d-m-y'));

    return view('payment_booking.payment_successful');
    }

    public function review(Request $request){

    $customerId = Session::get('customer.customer_id');

    $review = new Review;
    $review->customer_id = $customerId;
    $review->review_text = $request->input('review'); 

    $review->save();

    return redirect()->route('home')->with('success', 'Review submitted successfully.');
    }
    
}
