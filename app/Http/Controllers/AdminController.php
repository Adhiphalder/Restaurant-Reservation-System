<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admenu()
    {
        return view('Admin.admenu');
    }
    
    public function customer()
    {
        return view('Admin.customer');
    }

    public function reservation()
    {
        return view('Admin.reservation');
    }
    
    public function table()
    {
        return view('Admin.table');
    }
}
