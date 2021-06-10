<?php

    namespace App\Http\Controllers\admin;
    use App\Http\Controllers\Controller;
    
    use App\Models\Video;
    use Illuminate\Http\Request;
    
    class VideoController extends Controller
    {
    
        
            public function  viewvideo()
        {
            $videos['videos']=Video::all();
            return view('admin.video.videolist',$videos);
        }
        public function  addvideo()
        {
            return view('admin.video.addvideo');
        }
        public function  editvideo($id){
         
        
          
            $editvideos['editvideos']=Video::find($id);
            return view('admin.video.editvideo' ,$editvideos);
           
        }
        public function  submitvideo(Request $request)
       
        {
    
            $video= request()->validate([
    
            'video_title'=> 'required',
            'video_icon'=> 'required',
            'video_link'=> 'required',
            
          
    
        ]);
       
        // dd($request->all());
        $video = [
    
    
    
            'video_title'=>$request->video_title,
            'video_link'=>$request->video_link,
         ];
        // dd($Product);
        
         if($request->hasFile('video_icon')){
            $path = $request->file('video_icon');
            $path = $request->video_icon->store('public/media');
            $path = basename($path);
            $video['video_icon'] = $path;
            }
    
        
           Video::insert($video);
    
          return redirect()->route('view-video')->withSuccess('Great! Data successfully insert with validation.');
       
        }
        public function updatevideo(Request $request){
    
    
    
    
            $video=Video::find($request->id);
     
            $video->video_title= $request->video_title;
            $video->video_link= $request->video_link;
           
         
     
     
             $path = $request->file('video_icon');
            if($request->hasFile('video_icon')){
             $path = $request->video_icon->store('public/media');
             $path = basename($path);
             $video->video_icon = $path;
             }
     
     
             $video->save();
             return redirect()->route('view-video',$request->id)->withSuccess('Great! Record Has been update successfully');
     }
         
          public function deleteVideo(request $request , $id)
         {
            
         $delete=Video::find($id)->delete();
         return  redirect()->route('view-video',$delete)->withSuccess('Great! Record Has been Delete successfully ');
         }
}
