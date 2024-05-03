<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;

use App\Models\Payment;

use App\Models\Table;

use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function view(){

        if (!Session::has('customer')) {
            return redirect()->route('signup')->with('error', 'Please log in to view bookings.');
        }
        
        $bookings = Booking::all();
        
        return view('payment_booking.booking', ['bookings' => $bookings]);

    }


    public function booking(Request $request){

    $request->validate([
        'date' => 'required|date',
        'time' => 'required',
        'guest_no' => 'required|numeric', 
        'gnum' => 'required|numeric', 
    ]);
    
    Session::put('selected_seat_option', $request->input('gnum'));
    
    $tableId = $request->input('table_id');
    
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
    
    Session::put('booking', $booking);
    
    Session::put('booking_id', $booking->booking_id);
    Session::put('booking_date', $request->input('date'));
    Session::put('booking_time', $request->input('time'));
    Session::put('guest_no', $request->input('guest_no'));
    Session::put('seat_no', $request->input('gnum'));
    
    $tableNo = $request->input('table_no');
    $table = Table::where('table_no', $tableNo)->first();
    if ($table) {
        $table->table_book_status = 0; 
        $table->save();
    }
    
    return redirect()->route('booktable')->with('success', 'Booking created successfully');



    }

    public function table_view(Request $request){



        if (!Session::has('selected_seat_option')) {
            return redirect()->route('booking')->with('error', 'Please select a seat option first.');
        }
    
        $selectedSeatOption = Session::get('selected_seat_option');
    
        $availableTables = Table::where('table_book_status', 1)
                                ->where('table_seat_no', $selectedSeatOption)
                                ->get();
    
        if ($availableTables->isEmpty()) {
            Session::put('no_tables_available', true);
        } else {
            Session::forget('no_tables_available');
        }
    
        return view('payment_booking.booktable', ['availableTables' => $availableTables]);
        

    }

    public function cancelBooking($id)
    {
        Booking::find($id)->delete();
        return redirect()->back()->with('success', 'Booking canceled successfully');
    }


    public function storetable(Request $request)
    {

        // dd($request->all());

    $request->validate([
        'table_id' => 'required|exists:tables,table_id',
    ]);

    $bookingData = Session::get('booking');

    $booking = new Booking;
    $booking->fill($bookingData->toArray());
    $booking->table_id = $request->input('table_id');
    $booking->save();

    Session::put('booking_id', $booking->booking_id);

    $tableId = $request->input('table_id');
    $table = Table::findOrFail($tableId);

    Session::forget('booking');
    Session::put('table_id', $tableId);
    Session::put('table_no', $table->table_no);

    return redirect()->route('payment')->with('success', 'Booking created successfully');
    }

}
