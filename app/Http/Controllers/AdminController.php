<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Table;

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

    public function reservation()
    {
        return view('Admin.reservation');
    }
    
    public function customer()
    {
        $customers = Customer::all();
        
        return view('Admin.customer', ['customers' => $customers]);


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

    public function viewbookcancle(){
        return view('Admin.bookcancle');
    }
}
