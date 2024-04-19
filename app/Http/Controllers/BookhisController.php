<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class BookhisController extends Controller
{
    public function booking_history(Request $request){
//  // Retrieve all bookings
//  $customerBookings = Booking::all();

//  // Store booking data in session
//  $request->session()->put('customerBookings', $customerBookings);

//  // Pass the bookings to the view
//  return view('Profile.booking_history', ['customerBookings' => $customerBookings]);



 // Check if the session contains customer_id
 if ($request->session()->has('customer_id')) {
    // Retrieve customer ID from the session
    $customerId = $request->session()->get('customer_id');

    // Retrieve bookings associated with the customer
    $customerBookings = Booking::where('customer_id', $customerId)->get();

    // Pass the bookings to the view
    return view('Profile.booking_history', ['customerBookings' => $customerBookings]);
} else {
    // No customer ID found in the session, handle appropriately
    return redirect()->back()->with('error', 'Please log in to view your booking history.');
}



    }
}
