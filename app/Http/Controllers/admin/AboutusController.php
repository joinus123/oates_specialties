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
    
      
        $editteams['editteams']=Aboutus::all();
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
        
}