<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ourblog;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class OurblogController extends Controller
{
    public function  viewblog(){
        $blogs=Ourblog::all();
        return view('admin.ourblog.ourbloglist')->with('blogs' , $blogs);
       
    }
        public function  addblog()
    {
        return view('admin.ourblog.addourblog');
    }
       
    public function  editblog($id){
        $view['view']=Ourblog::find($id);
        return view('admin.ourblog.editourblog',$view);
       
    }
    
    public function  submitblog(Request $request)
    {
        // dd($request->all());
        $Ourblog = request()->validate([
             
            
            'heading'=> 'required',
            'description'=> 'required',
            'blog_image'=> 'required',
        
            
        ]);
    
        $Ourblog = [
    
    
    
            'heading'=>$request->heading,
            'description'=>$request->description,

         
            ];
    
            if($request->hasFile('blog_image')){
            $path = $request->file('blog_image');
            $path = $request->blog_image->store('public/media');
            $path = basename($path);
            $Ourblog['image']= $path;
         }
    
        //
    
        
        Ourblog::insert($Ourblog);
    
        return redirect()->route('view-blog')->withSuccess('Great! Data successfully insert with validation.');
       
        }
    
        public function updateblog(Request $request){
    
    
    
    
            $Ourblog=Ourblog::find($request->id);
    
            $Ourblog->heading= $request->heading;
            $Ourblog->description= $request->description;
    
    
    
    
            if($request->hasFile('image')){
            $path = $request->file('image');
            $path = $request->image->store('public/media');
            $path = basename($path);
            $Ourblog->image= $path;
            }
    
    
            $Ourblog->save();
            return redirect()->route('view-blog',$request->id)->withSuccess('Great! Record Has been update successfully');
    }
        
            public function deleteblog(request $request , $id)
        {
           
        $delete=Ourblog::find($id)->delete();
        return  redirect()->route('view-blog',$delete)->withSuccess('Great! Record Has been Delete successfully ');
        }
  
}
