<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;


class SitesettingController extends Controller
  {
    // public function  viewsitesetting(){
    // return view('admin.sitesetting');
       
    // }

    public function  viewsitesetting(Request $request){
      $sitesetting['sitesetting']=Sitesetting::all();
      return view('admin.sitesetting',$sitesetting);
  }


 
    


       public function  submitsitesetting(Request $request){



       
       
      $sitesetting = [

            'copy_righttext'=>$request->copy_righttext,
             
         

        ];

            if($request->hasFile('header_logo')){
            $path = $request->file('header_logo');
            $path = $request->header_logo->store('public/media');
            $path = basename($path);
            $sitesetting['header_logo']= $path;
         }

            if($request->hasFile('footer_logo')){
              $path = $request->file('footer_logo');
              $path = $request->footer_logo->store('public/media');
              $path = basename($path);
              $sitesetting['footer_logo']= $path;
       }

    
       if($request->id)
       {
           Sitesetting::where('id',$request->id)->update($sitesetting);

       }

     else{
          Sitesetting::where('id',$request->id)->insert($sitesetting);

        }
  return redirect()->route('view-sitesetting')->withSuccess('Great! Data successfully insert with validation.');
}

}
