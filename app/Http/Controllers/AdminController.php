<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Table;
use App\Models\Admin;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // public function admenu()
    // {
    //     return view('Admin.admenu');
    // }
    
    // public function customer()
    // {
    //     return view('Admin.customer');
    // }


    public function showLoginForm(){
        return view('Admin.adminlogin');
    }

    public function login(Request $request){

        // $credentials = $request->only('admin_id', 'password');

        // $admin = Admin::where('admin_id', $credentials['admin_id'])->first();   

        // if ($admin && Hash::check($credentials['password'], $admin->password)) {
        //     // Authentication successful
        //     $request->session()->put('admin', $admin);

        //     return redirect()->intended('/');
        // }

        // return redirect()->back()->withInput($request->only('admin_id'));



        $credentials = $request->only('admin_id', 'password');

        $admin = Admin::where('admin_id', $credentials['admin_id'])->first();   

        if ($admin && $admin->password === $credentials['password']) {
            $request->session()->put('admin', $admin);

            return redirect()->route('admin.customer');
        }

        return redirect()->back()->withInput($request->only('admin_id'));
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin');
    return redirect('/'); 
    }

    public function customer(Request $request)
    {
        // $customers = Customer::all();
        
        // return view('Admin.customer', ['customers' => $customers]);
        


        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $adminName = $admin->name;

            $firstName = ucfirst(explode(' ', $adminName)[0]);

            $customers = Customer::all();
            return view('Admin.customer', ['customers' => $customers, 'firstName' => $firstName]);
        } else {
            return redirect('/admin/login'); 
        }
    }

    public function viewaddtable(){
        return view('Admin.addtable');
    }

    public function addtable(Request $request){

        $element = new Table;
        $element->table_no = $request->input('table_no');
        $element->table_seat_no = $request->input('table_seat_no');
        $element->save();
        return redirect('/admin/table');
    }

    public function viewtable(){
        $elements = Table::all();
        $data = compact('elements');
        return view('Admin.table')->with($data);
    }

    public function reservation(Request $request)
    {
        // return view('Admin.reservation');

        // $bookings = Booking::with('customer')->get(); 

        // return view('Admin.reservation', ['bookings' => $bookings]);


        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $adminName = $admin->name;
    
            $firstName = ucfirst(explode(' ', $adminName)[0]);
    
            $bookings = Booking::with('customer')->get(); 
    
            return view('Admin.reservation', ['bookings' => $bookings, 'firstName' => $firstName]);
        } else {
            return redirect('/admin/login'); 
        }

    }
    
    public function viewbookcancle(){
        return view('Admin.bookcancle');
    }


}
