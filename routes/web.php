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

Route::get('/test', function () {
    return view('test');
});
Route::group(['namespace' => 'App\Http\Controllers'],function(){
    Route::get('/','IndexController@index')->name('home');
    Route::post('ipa/user','IndexController@login')->name('login');
    Route::post('ipa/logout','IndexController@logout')->name('logout');
    Route::group(['middleware' => 'checkUser','prefix' => 'user'],function(){
        Route::get('profile','UserController@profile')->name('profile');
        Route::get('address','UserController@address')->name('address');
        Route::get('address/add','UserController@add_address')->name('add_address');
        Route::get('address/edit/{id}','UserController@update_address')->name('address_edit');
        Route::get('checkout','UserController@checkout')->name('checkout');
        Route::get('orders','UserController@orders')->name('orders');
        Route::post('orders/details','UserController@order_details')->name('order_details');


    });
});
