<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customerm;
use App\Models\Booking;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function successful(){
        return view('payment_booking.paymentsuc');
    }

    public function indexone(){
        return view('payment_booking.customer');
    }

    public function postone(Request $requestone){
        echo "<pre>";
        print_r($requestone->all());

        
        $formone = new Customerm;
        $formone->name = $requestone['name'];
        $formone->contact = $requestone['contact'];
        $formone->email = $requestone['email'];
        $formone->address = $requestone['address'];
        $formone->password = md5($requestone['password']);
        $formone->save();
        return redirect('/index');
    }


    public function index(){
        return view('payment_booking.bookingmy');
    }

    public function post(Request $request) {
        echo "<pre>";
        print_r($request->all());

        $form = new Booking;
        $form->date = $request['date'];
        $form->time = $request['time'];
        $form->guest = $request['guest'];
        $form->seat = $request['seat'];
        $form->table = $request['table'];
        $form->save();
        return redirect('/payment');
    }


    public function pay(Request $payment){
        echo "<pre>";
        print_r($payment->all());

        $pay = new Payment;
        $pay->paymethod = $payment['p_method'];
        $pay->save();
        return redirect('/successful');
    }

    public function view(){
        $formdatas = Customerm::all();
        $forms = Booking::all();

        return view('payment_booking.payment', compact('forms', 'formdatas'));
    }
}
