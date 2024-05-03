<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

use App\Models\Booking;

use App\Models\Payment;

use App\Models\Table;

use Illuminate\Support\Facades\Session;


class PayhisController extends Controller
{
    public function payment_history()
    {

        if (!Session::has('customer')) {
            return redirect()->route('signup')->with('error', 'Please log in to view payments.');
        }

        $customerId = Session::get('customer.customer_id');

        $payments = Payment::where('customer_id', $customerId)
                           ->with('booking')
                           ->get();

        return view('profile.payment_history', ['payments' => $payments]);
    }
}
