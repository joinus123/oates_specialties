<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Brandlogo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BrandlogoController extends Controller
{
    public function  viewbrandlist(){
        $Brandlogo=Brandlogo::all();
        return view('admin.ourbrand.brandlogolist')->with('Brandlogo' ,$Brandlogo);
       
    }
        public function  addbrandlogo()
    {
        return view('admin.ourbrand.addbrandlogo');
    }
       
    public function  editbrandlogo($id){
        $view['view']=Brandlogo::find($id);
        return view('admin.ourbrand.editbrandlogo',$view);
       
    }
    
    public function  submitbrandlogo(Request $request)
    {
        // dd($request->all());
        $Brandlogo = request()->validate([
    
            'brand_name'=> 'required',
            'brand_logo'=> 'required',
            
        ]);
    
         $Brandlogo = [
    
    
    
            'brand_name'=>$request->brand_name,
       
    
    
    
        ];
    
            if($request->hasFile('brand_logo')){
            $path = $request->file('brand_logo');
            $path = $request->brand_logo->store('public/media');
            $path = basename($path);
            $Brandlogo['brand_logo']= $path;
         }
    
        //
    
        
        Brandlogo::insert($Brandlogo);
    
        return redirect()->route('view-brandlist')->withSuccess('Great! Data successfully insert with validation.');
       
        }
    
        public function updateBrandlogo(Request $request){
    
    
    
    
            $Brandlogo=Brandlogo::find($request->id);
    
            $Brandlogo->brand_name= $request->brand_name;
    
    
    
            if($request->hasFile('brand_logo')){
            $path = $request->file('brand_logo');
            $path = $request->brand_logo->store('public/media');
            $path = basename($path);
            $Brandlogo->brand_logo = $path;
            }
    
    
     $Brandlogo->save();
     return redirect()->route('view-brandlist',$request->id)->withSuccess('Great! Record Has been update successfully');
    }
        
     public function deletebrandlogo(request $request , $id)
        {
           
        $delete=Brandlogo::find($id)->delete();
        return  redirect()->route('view-brandlist',$delete)->withSuccess('Great! Record Has been Delete successfully ');
        }
}
