<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepage;
use App\Models\SiteSetting;
use App\Models\editprofile;
use App\Models\Features;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
public function  dashboard(Request $request){
return view('admin.dashboard.dashboardpage');
}
public function  userprofile(Request $request){
  
    return view('admin.userprofile');
    }



}