<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('add');
});

Route::get('/', function () {
    return view('adminlist');
});

Route::get('/', function () {
    return view('admins');
});

Route::get('/', function () {
    return view('alert');
});

Route::get('/', function () {
    return view('archive');
});

Route::get('/', function () {
    return view('content');
});

Route::get('/', function () {
    return view('delete');
});

Route::get('/', function () {
    return view('footer');
});

Route::get('/', function () {
    return view('header');
});

Route::get('/', function () {
    return view('hresoures');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/', function () {
    return view('logout');
});

Route::get('/', function () {
    return view('paymentcheck');
});

Route::get('/', function () {
    return view('register');
});

Route::get('/', function () {
    return view('salarytracking');
});

Route::get('/', function () {
    return view('update');
});

Route::get('/', function () {
    return view('vacation');
});
