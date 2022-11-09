<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    public function index(){

        return view('login');
    }

    public function CustomLogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = DB::table('admins')->where('username', '=', $request->username)->first();

        if($admin && Hash::check($request->password,$admin->password)){

            $request->session()->put('IsLogged',$request->username);

            return redirect('home');
        }
        
        return redirect('login')->with('failed', 'Login is invalid');
            
    }

    public function CustomLogOut(){

        session::flush('IsLogged');
        session::forget('IsLogged');
        return redirect('login');


    }
}
