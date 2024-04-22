<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Customer;
use App\Models\Table;
use App\Models\Admin;
use App\Models\Booking;
use App\Models\Menu;
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

        $credentials = $request->only('admin_id', 'password');

        $admin = Admin::where('admin_id', $credentials['admin_id'])->first();   

        if ($admin && Hash::check($credentials['password'], $admin->password)) {
            // Authentication successful
            $request->session()->put('admin', $admin);

            return redirect()->route('admin.customer');
        }

        return redirect()->back()->withInput($request->only('admin_id'));



        // $credentials = $request->only('admin_id', 'password');

        // $admin = Admin::where('admin_id', $credentials['admin_id'])->first();   

        // if ($admin && $admin->password === $credentials['password']) {
        //     $request->session()->put('admin', $admin);

        //     return redirect()->route('admin.customer');
        // }

        // return redirect()->back()->withInput($request->only('admin_id'));
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

    public function view(Request $request){
        
        // return view('Admin.admenuform');

        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $adminName = $admin->name;
    
            return view('Admin.admenuform');
        } else {
            return redirect('/admin/login'); 
        }
    }

    public function show(Request $request){

        if ($request->hasFile('photo')) {
            # code...

            $photo = $request->file('photo');
            $fileName = time() .'_'.$photo->getClientOriginalName();
            $filePath = $photo->storeAs('photos',$fileName,'public');
        }else {
            # code...
            $filePath = null;
        }


        $addmenu = new Menu;
        $addmenu->menu_type = $request['menu_type'];
        $addmenu->veg_or_non_veg = $request['veg_or_non'];
        $addmenu->type_of_non_veg = $request['type_of_non_veg'];
        $addmenu->menu_name = $request['menu_name'];
        $addmenu->menu_description = $request['menu_des'];
        $addmenu->photo = $filePath;
        $addmenu->save();
        return redirect('/admin/menu');
    }

    public function viewmenu(Request $request){
        // $addmenus = Menu::all();
        // $data = compact('addmenus');
        // return view('Admin.admenu')->with($data);

        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $adminName = $admin->name;

            $firstName = ucfirst(explode(' ', $adminName)[0]);

            $addmenu = Menu::all();
            return view('Admin.admenu', ['addmenu' => $addmenu, 'firstName' => $firstName]);   
        } else {
            return redirect('/admin/login'); 
        }
    }


    public function menuview(){
        return view('payment_booking.menu');
    }

    public function viewaddtable(Request $request){
        // return view('Admin.addtable');

        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $adminName = $admin->name;
    
            $tables = Table::all(); 
    
            return view('Admin.addtable');
        } else {
            return redirect('/admin/login'); 
        }
    }

    public function viewtable(Request $request){
        // $elements = Table::all();
        // $data = compact('elements');
        // return view('Admin.table')->with($data);

        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $adminName = $admin->name;
    
            $firstName = ucfirst(explode(' ', $adminName)[0]);
    
            $tables = Table::all(); 
    
            return view('Admin.table', ['elements' => $tables, 'firstName' => $firstName]);
        } else {
            return redirect('/admin/login'); 
        }
    }

    public function addtable(Request $request){

        $element = new Table;
        $element->table_no = $request->input('table_no');
        $element->table_seat_no = $request->input('table_seat_no');
        $element->save();
        return redirect('/admin/table');
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
    
    public function viewbookcancle(Request $request){
        // return view('Admin.bookcancle');

        // if ($request->session()->has('admin')) {
        //     $admin = $request->session()->get('admin');
        //     $adminName = $admin->name;
        //     $firstName = ucfirst(explode(' ', $adminName)[0]);
    
        //     // Pass $firstName variable to the view
        //     return view('Admin.bookcancle', ['firstName' => $firstName]);
        // } else {
        //     return redirect('/admin/login');
        // }

        if ($request->session()->has('admin')) {
            $admin = $request->session()->get('admin');
            $adminName = $admin->name;
            $firstName = ucfirst(explode(' ', $adminName)[0]);
    
            $bookings = Booking::all();
    
            return view('Admin.bookcancle', ['bookings' => $bookings, 'firstName' => $firstName]);
        } else {
            return redirect('/admin/login');
        }
        
    }

    public function delete(){
        
    }


}
