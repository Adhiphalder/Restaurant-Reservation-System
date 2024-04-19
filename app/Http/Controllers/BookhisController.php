<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookhistory;

class BookhisController extends Controller
{
    public function booking_history(){
        return view('Profile.booking_history', );
    }
}
