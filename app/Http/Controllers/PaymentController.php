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
use Illuminate\Support\Str;


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
        
        if (!Session::has('customer')) {
            return redirect()->route('signup')->with('error', 'Please log in to view bookings.');
        }
    
        if (!Session::has('booking_id')) {
            return redirect()->route('booking')->with('error', 'You need to make a booking first.');
        }

        if (!Session::has('table_id')) {
            return redirect()->route('booktable')->with('error', 'You need to select a table first.');
        }
    
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


        Session::forget('booking_id');
        Session::forget('table_id');
        Session::forget('payment_id');
        Session::forget('date');
        Session::forget('time');
        Session::forget('guest_no');
        Session::forget('current_date');

        return redirect()->route('home')->with('success', 'Review submitted successfully.');
    }

    public function invoice()
    {
        // return view ('payment_booking.invoice');

        if (!Session::has('customer')) {
            return redirect()->route('signup')->with('error', 'Please log in to view Invoice.');
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

        $date = Carbon::now()->format('F d, Y');

        $paymentId = Session::get('payment_id');

        $customerName = Session::get('customer_name');
        $customerContact = Session::get('customer_contact');
        $customerAddress = Session::get('customer_address');

        $bookingId = Session::get('booking_id');
        $booking = Booking::findOrFail($bookingId);
        $timeSlot = $booking->time;
        $dueDate = Carbon::parse($booking->date)->format('d-m-Y');
        $guestNo = Session::get('guest_no');

        $paymentMethod = Payment::findOrFail($paymentId)->paymethod;


        $invoiceId = 'INV-' . strtoupper(Str::random(8));

        return view ('payment_booking.invoice', compact('customerName', 'customerContact', 'customerAddress', 'date', 'invoiceId', 'paymentId', 'timeSlot', 'dueDate', 'guestNo', 'paymentMethod'));
    }
    
}
