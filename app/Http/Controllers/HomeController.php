<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sitesetting;
use App\Models\Socialmedialink;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $Categorys=Category::all();
        $Sitesettings=Sitesetting::all();
        $socialmedialinks=Socialmedialink::all();
        return view('frontend.myaccount')->with([ 'socialmedialinks'=>$socialmedialinks,'Categorys'=>$Categorys,'Sitesettings'=>$Sitesettings]);
    
    }
   
  
}
