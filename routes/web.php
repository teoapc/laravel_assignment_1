<?php

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


Route::group(['middleware'=>'web'], function(){
    //Auth::routes();

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/faq', function () {
        return view('faq');
    });


//    Route::get('auth/admin_login', ['uses'=>'Auth\AdminLoginController@showLoginForm'])->name('adminLogin');
//    Route::post('auth/admin_login', ['uses'=>'Auth\AdminLoginController@login'])->name('admin.login.submit');


});

//Route::get('/admin', ['uses'=>'AuthController@index']);


//TicketController routes


