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

Route::get('/home','Homecontroller@index')->name('home');

Route::get('/login','CustomAuthController@index')->name('login');

Route::post('/custom-login', 'CustomAuthController@CustomLogin')->name('login.custom'); 

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/adminlist', function () {
    return view('adminlist');
});

Route::get('/admins', function () {
    return view('admins');
});

Route::get('/alert', function () {
    return view('alert');
});

Route::get('/archive', function () {
    return view('archive');
});

Route::get('/content', function () {
    return view('content');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/hresoures', function () {
    return view('hresoures');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/paymentcheck', function () {
    return view('paymentcheck');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/salarytracking', function () {
    return view('salarytracking');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/vacation', function () {
    return view('vacation');
});
