<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $credentials = $request->only('username','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('home')->withSuccess('Signed in');
        }

        return redirect('login')->withSuccess('Login details are not valid');

    }
}
