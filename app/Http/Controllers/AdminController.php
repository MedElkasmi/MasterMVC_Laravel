<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index(){

        $data = admin::all();

        return view('adminlist')->with([
           'data' => $data 
        ]);
    }

    public function register(Request $request){

        $request->validate([

            'username' => 'required|min:5|max:15',
            'password' => 'required|min:7|max:7',
            'repassword' => 'required|min:7|max:7',

        ]);
        
        if($request->password == $request->repassword) {

            admin::create([
                'username' => $request->username,
                'password' => Hash::make($request->password)
            ]);
    
            return redirect('adminlist')->with('admin.created','Admin has been created succesfully!');
        }


        return redirect('register')->with('password.wrong','Password does not match');





    }
}
