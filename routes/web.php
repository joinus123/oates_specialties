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

     Route::get('/viewblog', 'OurblogController@viewblog')->name('view-blog');
     Route::get('/addblog', 'OurblogController@addblog')->name('add-blog');
     Route::get('/editblog/{id}', 'OurblogController@editblog')->name('edit-blog');
     Route::post('/updateblog/{id}', 'OurblogController@updateblog')->name('update-blog');
     Route::post('/submitblog', 'OurblogController@submitblog')->name('submit-blog');
     Route::get('/deleteblog/{id}', 'OurblogController@deleteblog')->name('delete-blog');

     Route::get('/viewsocialmedialink', 'SocialmedialinkController@viewsocialmedialink')->name('view-socialmedialink');
     Route::get('/addsocialmedialink', 'SocialmedialinkController@addsocialmedialink')->name('add-socialmedialink');
     Route::get('/editsocialmedialink/{id}', 'SocialmedialinkController@editsocialmedialink')->name('edit-socialmedialink');
     Route::post('/updatesocialmedialink/{id}', 'SocialmedialinkController@updatesocialmedialink')->name('update-socialmedialink');
     Route::post('/submitsocialmedialink', 'SocialmedialinkController@submitsocialmedialink')->name('submit-socialmedialink');
     Route::get('/deletesocialmedialink/{id}', 'SocialmedialinkController@deletesocialmedialink')->name('delete-socialmedialink');
     
     Route::get('/view', 'SliderimageController@viewsliderimage')->name('view-slider');
     Route::get('/add', 'SliderimageController@addsliderimage')->name('add-slider');
     Route::get('/edit/{id}', 'SliderimageController@editsliderimage')->name('edit-slider');
     Route::post('/update/{id}', 'SliderimageController@updatesliderimage')->name('update-slider');
     Route::post('/submit', 'SliderimageController@submitsliderimage')->name('submit-slider');
     Route::get('/delete/{id}', 'SliderimageController@deletesliderimage')->name('delete-slider');

     Route::get('/aboutus/view', 'AboutusController@viewaboutus')->name('view-aboutus');
     Route::get('/aboutus/add', 'AboutusController@addaboutus')->name('add-aboutus');
     Route::get('/aboutus/edit/{id}', 'AboutusController@editaboutus')->name('edit-aboutus');
     Route::post('/aboutus/update/{id}', 'AboutusController@updateaboutus')->name('update-aboutus');
     Route::post('/aboutus/submit', 'AboutusController@submitaboutus')->name('submit-aboutus');
     Route::get('/aboutus/delete/{id}', 'AboutusController@deleteaboutus')->name('delete-aboutus');


     Route::get('/contact/view', 'ContactController@viewcontact')->name('view-contact');
     Route::get('/contact/add', 'ContactController@addcontact')->name('add-contact');
     Route::get('/contact/edit/{id}', 'ContactController@editcontact')->name('edit-contact');
     Route::post('/contact/update/{id}', 'ContactController@updatecontact')->name('update-contact');
     Route::post('/contact/submit', 'ContactController@submitcontact')->name('submit-contact');
     Route::get('/contact/delete/{id}', 'ContactController@deletecontact')->name('delete-contact');
    
     Route::get('/view/sitesetting', 'SitesettingController@viewsitesetting')->name('view-sitesetting');
     Route::post('/sitesetting', 'SitesettingController@submitsitesetting')->name('submit-sitesetting');
    

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
    Route::get('cart','AppController@addcart')->name('add-cart');
    Route::get('productcategory/{id}', 'AppController@productcategory')->name('productcategory');


    //Add to Cart
    
    Route::get('/cart', 'CartController@cart')->name('cart.index');
    Route::post('/add', 'CartController@add')->name('cart.store');
    Route::post('/update', 'CartController@update')->name('cart.update');
    Route::get('/remove', 'CartController@remove')->name('cart.remove');
    Route::post('/clear', 'CartController@clear')->name('cart.clear');
    
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
