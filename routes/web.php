<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureAdminIsLogged;
use App\Http\Controllers\EmployesController;

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



Route::get('/home','HomeController@index')->name('home')->middleware(EnsureAdminIsLogged::class);


Route::controller(CustomAuthController::class)->group(function () {

    Route::get('login','index')->name('login');
    Route::post('custom-login', 'CustomLogin')->name('login.custom');

    Route::get('logout','CustomLogOut')->name('logout');
});
    
Route::resource('employe',EmployeController::class);


Route::get('adminlist','AdminController@index')->name('admin.list');

Route::view('/register','register')->name('admin.create');
Route::post('admin.register','AdminController@register')->name('admin.post');