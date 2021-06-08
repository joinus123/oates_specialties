<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bannerslider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;



class BannerController extends Controller
{
    public function  viewbannerslider(){
    $bannerslider['bannerslider']=Bannerslider::all();
    return view('admin.bannerslider.bannersliderlist',$bannerslider);
   
}
    public function  addbannerslider()
{
    return view('admin.bannerslider.addbannerslider');
}
   
public function  editbannerslider($id){
    $view['view']=Bannerslider::find($id);
    return view('admin.bannerslider.editbannerslider',$view);
   
}

public function  submitbannerslider(Request $request)
{
    // dd($request->all());
    $Bannerslider = request()->validate([

        'heading_one'=> 'required',
        'heading_two'=> 'required',
        'heading_three'=> 'required',
        'image'=> 'required',

    ]);

     $Bannerslider = [



        'heading_one'=>$request->heading_one,
        'heading_two'=>$request->heading_two,
        'heading_three'=>$request->heading_three,
        'image'=>$request->image,



    ];

        if($request->hasFile('image')){
        $path = $request->file('image');
        $path = $request->image->store('public/media');
        $path = basename($path);
        $Bannerslider['image']= $path;
     }

    //

    
    Bannerslider::insert($Bannerslider);

    return redirect()->route('banner-slider')->withSuccess('Great! Data successfully insert with validation.');
   
    }

    public function updatebannerslider(Request $request){




        $Bannerslider=Bannerslider::find($request->id);

        $Bannerslider->heading_one= $request->heading_one;
        $Bannerslider->heading_two= $request->heading_two;
        $Bannerslider->heading_three= $request->heading_three;



        if($request->hasFile('image')){
        $path = $request->file('image');
        $path = $request->image->store('public/media');
        $path = basename($path);
        $Bannerslider->image = $path;
        }


 $Bannerslider->save();
 return redirect()->route('banner-slider',$request->id)->withSuccess('Great! Record Has been update successfully');
}
    
 public function deletebanner(request $request , $id)
    {
       
    $delete=Bannerslider::find($id)->delete();
    return  redirect()->route('banner-slider',$delete)->withSuccess('Great! Record Has been Delete successfully ');
    }
}
