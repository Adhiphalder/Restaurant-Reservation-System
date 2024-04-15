<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Menu;

class MenuController extends Controller
{
    public function view(){
        return view('Admin.admenuform');
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
    }
}
