<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureAdminIsLogged;

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
//Route::get('/home','EmployesController@count');

Route::controller(CustomAuthController::class)->group(function () {

    Route::get('login','index')->name('login');
    Route::post('custom-login', 'CustomLogin')->name('login.custom');

    Route::get('logout','CustomLogOut')->name('logout');
});

Route::view('/hresoures','hresoures');
Route::get('hresoures','EmployesController@show')->name('hresoures');
Route::view('/add','add')->name('create.employe');
Route::post('employe.store','EmployesController@store')->name('store.employe');
Route::view('/adminlist','adminlist')->name('admin.list');



