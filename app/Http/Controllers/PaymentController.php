<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\Session;


class PaymentController extends Controller
{
    public function pay_successful(){
        return view('payment_booking.payment_successful');
    }


    public function view(){
        return view('payment_booking.payment');
    }

    public function payment(Request $request){


        // $request->validate([
        //     'p_method' => 'required|in:upi,card', // Validate payment method
        // ]);

        // $customerId = Session::get('customer.customer_id'); // Retrieve customer_id from session
        // $bookingId = Session::get('booking_id'); // Retrieve booking_id from session

        // // Create a new Payment instance
        // $payment = new Payment;

        // // Assign values to the Payment instance
        // $payment->customer_id = $customerId;
        // $payment->booking_id = $bookingId;
        // $payment->paymethod = $request->input('p_method');
        // $payment->save();

        // // Redirect to the payment successful page
        // return redirect('/');


        // $request->validate([
        //     'p_method' => 'required|in:upi,card', 
        // ]);
    
        // $bookingId = Session::get('booking_id'); 
    
        // logger()->info('Retrieved booking ID from session: ' . $bookingId);
    
        // if (!$bookingId) {
        //     return redirect()->back()->with('error', 'Booking ID not found in session.');
        // }
    
        // $customerId = Session::get('customer.customer_id'); 
    
        // logger()->info('Retrieved customer ID from session: ' . $customerId);
    
        // $payment = new Payment;
    
        // $payment->customer_id = $customerId;
        // $payment->booking_id = $bookingId;
        // $payment->paymethod = $request->input('p_method');
    
        // logger()->info('Payment data before saving: ' . json_encode($payment));
        // $payment->save();
    
    
        // logger()->info('Payment data after saving: ' . json_encode($payment));
    
        // return redirect('/')->with('success', 'Payment successful.');




        $request->validate([
            'booking_id' => 'required|exists:bookings,id', // Ensure the booking_id exists
            'p_method' => 'required|in:upi,card', // Validate payment method
        ]);
    
        $bookingId = $request->input('booking_id');
        $customerId = Session::get('customer.customer_id'); // Retrieve customer_id from session
    
        $payment = new Payment;
        $payment->customer_id = $customerId;
        $payment->booking_id = $bookingId;
        $payment->paymethod = $request->input('p_method');
        $payment->save();
    
        return redirect('/')->with('success', 'Payment successful.');


    }
    
}
