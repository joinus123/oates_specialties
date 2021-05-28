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


   //Admin Login
   Route::get('logout', 'App\Http\Controllers\admin\SigninController@logout')->name('logout');
    Route::namespace('App\Http\Controllers\admin')->prefix('signin')->group(function() {
    Route::get('/', 'SigninController@loginform')->name('loginform');
    
    Route::get('/forgetpassword', 'SigninController@forgetpassword')->name('forgetpassword');
    Route::post('/dashboard','SigninController@admindashboard')->name('admin-login');
    
    Route::group(['middleware' => 'admin'],function(){


   
     Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
     Route::get('/userprofile', 'DashboardController@userprofile')->name('userprofile');

     Route::get('/bannerslider', 'BannerController@viewbannerslider')->name('banner-slider');
     Route::get('/addbannerslider', 'BannerController@addbannerslider')->name('addbanner-slider');
     Route::get('/editbannerslider/{id}', 'BannerController@editbannerslider')->name('editbanner-slider');
     Route::post('/updatebannerslider/{id}', 'BannerController@updatebannerslider')->name('update-slider');
     Route::post('/submitbannerslider', 'BannerController@submitbannerslider')->name('submit-slider');
     Route::get('/deletebanners/{id}', 'BannerController@deletebanner')->name('delete-slider');


     Route::get('/viewbrand', 'BrandlogoController@viewbrandlist')->name('view-brandlist');
     Route::get('/addbrandlogo', 'BrandlogoController@addbrandlogo')->name('addbrandlogo');
     Route::get('/editbrandlogo/{id}', 'BrandlogoController@editbrandlogo')->name('edit-brandlogo');
     Route::post('/updatebrandlogo/{id}', 'brandlogoController@updatebrandlogo')->name('update-brandlogo');
     Route::post('/submitbrandlogo', 'BrandlogoController@submitbrandlogo')->name('submitbrandlogo');
     Route::get('/deletebrandlogo/{id}', 'BrandlogoController@deletebrandlogo')->name('delete-brandlogo');


     Route::get('/viewbestseller', 'BestsellerController@viewbestsellerlist')->name('view-bestsellerlist');
     Route::get('/addbestseller', 'BestsellerController@addbestseller')->name('add-bestseller');
     Route::get('/editbestseller/{id}', 'BestsellerController@editbestseller')->name('edit-bestseller');
     Route::post('/updatebestseller/{id}', 'BestsellerController@updatebestseller')->name('update-bestseller');
     Route::post('/submitbestseller', 'BestsellerController@submitbestseller')->name('submit-bestseller');
     Route::get('/deletebestseller/{id}', 'BestsellerController@deletebestseller')->name('delete-bestseller');

     Route::get('/viewcategory', 'CategoryController@viewcategory')->name('view-category');
     Route::get('/addcategory', 'CategoryController@addcategory')->name('add-category');
     Route::get('/editcategory/{id}', 'CategoryController@editcategory')->name('edit-category');
     Route::post('/updatecategory/{id}', 'CategoryController@updatecategory')->name('update-category');
     Route::post('/submitcategory', 'CategoryController@submitcategory')->name('submit-category');
     Route::get('/deletecategory/{id}', 'CategoryController@deletecategory')->name('delete-category');


     Route::get('/viewproduct', 'AllproductController@viewproduct')->name('view-product');
     Route::get('/addproduct', 'AllproductController@addproduct')->name('add-product');
     Route::get('/editproduct/{id}', 'AllproductController@editproduct')->name('edit-product');
     Route::post('/updateproduct/{id}', 'AllproductController@updateproduct')->name('update-product');
     Route::post('/submitproduct', 'AllproductController@submitproduct')->name('submit-product');
     Route::get('/deleteproduct/{id}', 'AllproductController@deleteproduct')->name('delete-product');


});

});
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
