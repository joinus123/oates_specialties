<?php

namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function homepage()
    {
      
        return view('frontend.index');
       
    }

    public function account()
    {
    //    dd("ggggggggggg");
        return view('frontend.myaccount');
    }
    public function aboutus()
    {
    //    dd("ggggggggggg");
        return view('frontend.about_us');
    }
    public function video()
    {
    //    dd("ggggggggggg");
        return view('frontend.video');
    }
    public function orderstatus()
    {
    //    dd("ggggggggggg");
        return view('frontend.orderstatus');
    }
    public function wishlist()
    {
    //    dd("ggggggggggg");
        return view('frontend.wishlist');
    }
    public function allproduct()
    {
    //    dd("ggggggggggg");
        return view('frontend.allproduct');
    }
    public function armcare()
    {
    //    dd("ggggggggggg");
        return view('frontend.armcare');
    }
    public function conditionrecovery()
    {
    //    dd("ggggggggggg");
        return view('frontend.conditionrecovery');
    }
    public function addcart()
    {
    //    dd("ggggggggggg");
        return view('frontend.addcart');
    }
    public function checkout()
    {
    //    dd("ggggggggggg");
        return view('frontend.checkout');
    }
    public function mobility()
    {
    //    dd("ggggggggggg");
        return view('frontend.mobility');
    }
    public function strength()
    {
    //    dd("ggggggggggg");
        return view('frontend.strength');
    }
    public function velocity()
    {
    //    dd("ggggggggggg");
        return view('frontend.velocity');
    }
    public function walkup()
    {
    //    dd("ggggggggggg");
        return view('frontend.walkup');
    }
}
