<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admenu()
    {
        return view('Admin.admenu');
    }
    
    // public function customer()
    // {
    //     return view('Admin.customer');
    // }

    public function reservation()
    {
        return view('Admin.reservation');
    }
    
    public function table()
    {
        return view('Admin.table');
    }

    public function customer()
    {
        $customers = Customer::all();
        
        return view('Admin.customer', ['customers' => $customers]);


    }
}
