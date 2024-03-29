<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mriganka extends Controller
{
    /**
     * Handle the incoming request.
     */

    // @param\Illuminate\Http\Request;

    public function __invoke(Request $request)
    {
        return view("payment_booking.menu");
    }
}
