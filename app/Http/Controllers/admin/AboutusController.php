<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class AboutusController extends Controller
{

    
    public function  viewaboutus()
    {
        $teams['teams']=Aboutus::all();
        return view('admin.aboutus.teamlist',$teams);
    }
    public function  addaboutus()
    {
        return view('admin.aboutus.addteam');
    }
    public function  editaboutus($id){
    
      
        $editteams['editteams']=Aboutus::find($id);
        return view('admin.aboutus.editteam' ,$editteams);
       
    }
    public function  submitaboutus(Request $request)
   
    {

        $team= request()->validate([

        'name'=> 'required',
        'image'=>'required',
      

    ]);
   
    // dd($request->all());
    $team = [



        'name'=>$request->name,
     ];
    // dd($Product);
    
    if($request->hasFile('image')){
        $path = $request->file('image');
        $path = $request->image->store('public/media');
        $path = basename($path);
        $team['image'] = $path;
        }

    
       Aboutus::insert($team);

      return redirect()->route('view-aboutus')->withSuccess('Great! Data successfully insert with validation.');
   
    }
    public function updateaboutus(Request $request){




        $team=Aboutus::find($request->id);
 
        $team->name= $request->name;
       
     
 
 
        $path = $request->file('image');
        if($request->hasFile('image')){
         $path = $request->image->store('public/media');
         $path = basename($path);
         $team->image = $path;
         }
 
 
         $team->save();
         return redirect()->route('view-aboutus',$request->id)->withSuccess('Great! Record Has been update successfully');
 }
     
      public function deleteaboutus(request $request , $id)
     {
        
     $delete=Aboutus::find($id)->delete();
     return  redirect()->route('view-aboutus',$delete)->withSuccess('Great! Record Has been Delete successfully ');
     }

     public function  aboutusdetail()
     {
    
         return view('admin.aboutsetting.aboutusdetail');
     }
     public function submitdetail(Request $request)
{
    // dd($request->all());
$Homepage = request()->validate([
'section_one_text'=> 'required',
'section_one_box_one_heading'=> 'required',
'section_one_box_one_text'=> 'required',
'section_one_box_two_heading'=> 'required',
'section_one_box_two_text'=> 'required',
'section_one_box_three_heading'=> 'required',
'section_one_box_three_text'=> 'required',
'section_two_heading'=> 'required',
'section_two_text'=> 'required',
'section_three_heading'=> 'required',
'section_four_heading'=> 'required',
]);
$Homepage = [
    'heading_one'=>$request->section_one_text,
    'heading_two'=>$request->section_one_text,
    'description'=>$request->section_one_text,
    'image'=>$request->section_one_text,
    'section_two_h1'=>$request->section_one_text,
    'section_two_h2'=>$request->section_one_text,
    'section_two_txt'=>$request->section_one_text,
    'section_two_img'=>$request->section_one_text,
    'section_two_author_name'=>$request->section_one_text,
    'section_three_h1'=>$request->section_one_text,	
    'section_three_h2'=>$request->section_one_text,
    'section_three_txt'=>$request->section_one_text,
    'section_three_img'=>$request->section_one_text,
    'section_three_author_name'=>$request->section_one_text,
];

	

if($request->hasFile('section_one_logo_img')){
$path = $request->file('section_one_logo_img');
$path = $request->section_one_logo_img->store('public/media');
$path = basename($path);
$Homepage['section_one_logo']= $path;
}
if($request->hasFile('section_one_banner_img')){
$path = $request->file('section_one_banner_img');
$path = $request->section_one_banner_img->store('public/media');
$path1 = basename($path);
$Homepage['section_one_banner']= $path1;
}
if($request->hasFile('section_three_img')){
$path = $request->file('section_three_img');
$path = $request->section_three_img->store('public/media');
$path2 = basename($path);
$Homepage['section_three_image'] = $path2;
}

if($request->id)
{
Homepage::where('home_page_id',$request->id)->update($Homepage);
}
//dd($request->id);
else{
Homepage::where('home_page_id',$request->id)->insert($Homepage);
}
//   dd($Homepage);
return redirect()->route('home-page')->withSuccess('Great! Data successfully update with validation.');
}
        
}