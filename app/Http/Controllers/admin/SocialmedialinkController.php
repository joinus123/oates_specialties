<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Socialmedialink;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class SocialmedialinkController extends Controller
{
    public function  viewsocialmedialink(){
    $Socialmedialink=Socialmedialink::all();
    return view('admin.socialmedia.viewsocialmedia')->with('Socialmedialink',$Socialmedialink);
   
}


    public function  addsocialmedialink()
{   
 
    return view('admin.socialmedia.addsocialmedia');
}
   
   public function  editsocialmedialink($id){
    
    $view['view']=Socialmedialink::find($id);
    return view('admin.socialmedia.editsocialmedialink',$view);
   
}

public function  submitsocialmedialink(Request $request)
{

    // dd($request->all());
   
        $Socialmedialink= request()->validate([

        'socialmedia_name'=> 'required',
        'socialmedia_image'=> 'required',
    

    ]);
   
    // dd($request->all());
     $Socialmedialink = [



        'socialmedia_name'=>$request->socialmedia_name,
      
];
    // dd($Socialmedialink);
    
    if($request->hasFile('socialmedia_image')){
        $path = $request->file('socialmedia_image');
        $path = $request->socialmedia_image->store('public/media');
        $path = basename($path);
        $Socialmedialink['socialmedia_image'] = $path;
        }

    
    Socialmedialink::insert($Socialmedialink);

    return redirect()->route('view-socialmedialink')->withSuccess('Great! Data successfully insert with validation.');
   
    }

    public function updatesocialmedialink(Request $request){




       $Socialmedialink=Socialmedialink::find($request->id);

       $Socialmedialink->socialmedia_name= $request->socialmedia_name;
     

        if($request->hasFile('socialmedialink_image')){
        $path = $request->file('socialmedialink_image');
        $path = $request->socialmedialink_image->store('public/media');
        $path = basename($path);
        $Socialmedialink->socialmedialink_image = $path;
        }


       $Socialmedialink->save();
       return redirect()->route('view-socialmedialink',$request->id)->withSuccess('Great! Record Has been update successfully');
}
    
 public function deletesocialmedialink(request $request , $id)
    {
       
    $delete=Socialmedialink::find($id)->delete();
    return  redirect()->route('view-socialmedialink',$delete)->withSuccess('Great! Record Has been Delete successfully ');
    }
}        