<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

use App\Models\Booking;
use App\Models\Review;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Carbon;


class PaymentController extends Controller
{
    public function pay_successful(){
        return view('payment_booking.payment_successful');
    }


    public function view(){
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
        $payment->paymethod = $request->input('p_method');
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
        
        $review = new Review;
        $review->review_text = $request['review'];
        $review->save();
        return redirect('/');
    }
    
}
