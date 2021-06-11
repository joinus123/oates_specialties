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
    $data['data']=editprofile::all();
    return view('admin.userprofile',$data);
    }

    public function  updateprofile(Request $request){
        $profile = [
        'business_name'=> $request->business_name,
        'username'=> $request->username,
        'email_address'=> $request->email_address,
        'address'=> $request->address,
        ];
        if($request->hasFile('profile_image')){
        $path = $request->file('profile_image');
        $path = $request->profile_image->store('public/media');
        $path = basename($path);
        $profile['profile_image']= $path;
        }
        //
        if($request->id)
        {
        editprofile::where('id',$request->id)->update($profile);
        }
        //dd($request->id);
        else{
        editprofile::insert($profile);
        }
        return redirect()->route('userprofile')->withSuccess('Great! Data successfully update with validation.');
        }



}