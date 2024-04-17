<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Booking;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


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

    $payment = new Payment;
    $payment->customer_id = $customerId;
    $payment->booking_id = $bookingId; 
    $payment->amount = 200; 
    $payment->paymethod = $request->input('p_method');
    $payment->current_time = now(); 

    $payment->save();

    Session::put('date', $payment->created_at->format('Y-m-d'));
    Session::put('time', $payment->created_at->format('H:i:s'));
    Session::put('payment_id', $payment->payment_id);

    logger()->info('Payment created with booking ID: ' . $payment->booking_id);
    
    return view('payment_booking.payment_successful');
    }
    
}
