<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $test = 'med';
        return view('home')->with([
            'test' => $test
        ]);
    }
}
