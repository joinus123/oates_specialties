<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;


class SitesettingController extends Controller
  {
    public function  viewsitesetting(){
    return view('admin.sitesetting');
       
    }

    public function  addsitesetting(Request $request){
      $sitesetting['aboutus']=Sitesetting::all();
        return view('admin.dashboard.pages.aboutus',$aboutus);
    }
       public function  submitsitesetting(Request $request){

      $sitesetting = [

            'aboutus_heading'=>$request->copy_righttext,
         

        ];

            if($request->hasFile('header_logo')){
            $path = $request->file('header_logo');
            $path = $request->header_logo->store('public/media');
            $path = basename($path);
            $sitesetting['header_logo']= $path;
         }

         if($request->id)
         {
             Sitesetting::where('id',$request->id)->update($sitesetting);

         }

 else{
         Sitesetting::where('id',$request->id)->insert($sitesetting);

    }
      return redirect()->route('aboutus')->withSuccess('Great! Data successfully insert with validation.');
}

}
