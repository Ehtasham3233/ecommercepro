<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catagory;

class AdminController extends Controller
{
    public function view_catagory()
    {
        return view('admin.catagory');
    }

    public function add_catagory(Request $request)
    {
        $data=new catagory;
        $data->catagory_name=$request->catagory;

        $data->save();
        return redirect()->back()->with('message','Catagory Added Sucessfully');
    }
}


   

