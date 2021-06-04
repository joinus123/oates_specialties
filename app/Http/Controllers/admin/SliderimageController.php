<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Sliderimage;
use Illuminate\Http\Request;

class SliderimageController extends Controller
{

    
        public function  viewsliderimage()
    {
        $sliderimages['sliderimages']=Sliderimage::all();
        return view('admin.sliderimage.sliderimagelist',$sliderimages);
    }

    public function  addsliderimage()
    {
        return view('admin.sliderimage.addsliderimage');
    }
    public function  editsliderimage($id){
    
      
        $editslider['editslider']=Sliderimage::all();
        return view('admin.sliderimage.editsliderimage' ,$editslider);
       
    }
    public function  submitsliderimage(Request $request)
   
    {

        $Slider= request()->validate([

        'slider_description'=> 'required',
        'slider_image'=>'required',
      

    ]);
   
    // dd($request->all());
    $Slider = [



        'slider_description'=>$request->slider_description,
     ];
    // dd($Product);
    
    if($request->hasFile('slider_image')){
        $path = $request->file('slider_image');
        $path = $request->slider_image->store('public/media');
        $path = basename($path);
       $Slider['slider_image'] = $path;
        }

    
     Sliderimage::insert($Slider);

     return redirect()->route('view-slider')->withSuccess('Great! Data successfully insert with validation.');
   
    }
    public function updatesliderimage(Request $request){




        $Slider=Sliderimage::find($request->id);
 
        $Slider->slider_description= $request->slider_description;
       
     
 
 
         if($request->hasFile('slider_image')){
         $path = $request->file('slider_image');
         $path = $request->slider_image->store('public/media');
         $path = basename($path);
         $Slider->slider_image = $path;
         }
 
 
         $Slider->save();
         return redirect()->route('view-slider',$request->id)->withSuccess('Great! Record Has been update successfully');
 }
     
      public function deletesliderimage(request $request , $id)
     {
        
     $delete=Sliderimage::find($id)->delete();
     return  redirect()->route('view-slider',$delete)->withSuccess('Great! Record Has been Delete successfully ');
     }
        
}