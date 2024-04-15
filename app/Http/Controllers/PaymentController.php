<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function pay_successful(){
        return view('payment_booking.payment_successful');
    }


    public function view(){
        return view('payment_booking.payment');
    }

    public function payment(Request $request){
        
        $payment = new Payment;
        $payment->paymethod = $request['p_method'];
        $payment->save();
        return redirect('/pay/successful'); 
    }
    
}
