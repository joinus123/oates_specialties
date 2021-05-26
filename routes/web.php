<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Route::get('account','App\Http\Controllers\frontend\AppController@account')->name('account');

Route::namespace('App\Http\Controllers\frontend')->group(function() {
    Route::get('','AppController@homepage')->name('home-page');
    Route::get('account','AppController@account')->name('user-account');
    Route::get('aboutus','AppController@aboutus')->name('about.us');
    Route::get('video','AppController@video')->name('video');
    Route::get('orderstatus','AppController@orderstatus')->name('order-status');
    Route::get('wishlist','AppController@wishlist')->name('wish-list');
    Route::get('allproduct','AppController@allproduct')->name('all-product');
    Route::get('armcare','AppController@armcare')->name('armcare');
    Route::get('conditionrecovery','AppController@conditionrecovery')->name('condition.recovery');
    Route::get('mobility','AppController@mobility')->name('mobility');
    Route::get('strength','AppController@strength')->name('strength');
    Route::get('velocity','AppController@velocity')->name('velocity');
    Route::get('walkup','AppController@walkup')->name('walkup');
    Route::get('cart','AppController@addcart')->name('add-cart');
    Route::get('checkout','AppController@checkout')->name('checkout');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
