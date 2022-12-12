<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureAdminIsLogged;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VacationController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\PaymentCheckController;

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



Route::get('home','HomeController@index')->name('home')->middleware(EnsureAdminIsLogged::class);

Route::controller(CustomAuthController::class)->group(function () {

    Route::get('login','index')->name('login');
    Route::post('custom-login', 'CustomLogin')->name('login.custom');
    Route::get('logout','CustomLogOut')->name('logout');
});

Route::resource('employe',EmployeController::class);

Route::resource('admin',AdminController::class);

Route::resource('vacation',VacationController::class);

Route::resource('salary',SalaryController::class);

Route::controller(PaymentCheckController::class)->group(function () {

    Route::post('payment','preview')->name('preview');
    Route::get('pay','index');
    Route::view('payment','paymentcheck');

});


Route::view('archive','archive');
