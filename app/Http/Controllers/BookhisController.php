<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookhistory;
use Illuminate\Support\Facades\Auth;

class BookhisController extends Controller
{
    public function booking_history(){
        return view('Profile.booking_history', );
    }
}
