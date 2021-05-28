<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bestseller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BestsellerController extends Controller
{
    public function  viewbestsellerlist(){
        $Bestseller=Bestseller::all();
        return view('admin.bestsellerproduct.bestsellerproductlist')->with('Bestseller' , $Bestseller);
       
    }
        public function  addbestseller()
    {
        return view('admin.ourbrand.addbrandlogo');
    }
       
    public function  editbestseller($id){
        $view['view']=Bestseller::find($id);
        return view('admin.bestsellerproduct.addbestsellerproduct',$view);
       
    }
    
    public function  submitbestseller(Request $request)
    {
        // dd($request->all());
        $Bestseller = request()->validate([
             
            
            'bestproduct_img'=> 'required',
            'bestproduct_name'=> 'required',
            'bestproduct_description'=> 'required',
            'bestproduct_price'=> 'required',
            
        ]);
    
        $Bestseller = [
    
    
    
            'bestproduct_name'=>$request->bestproduct_name,
            'bestproduct_description'=>$request->bestproduct_description,
            'bestproduct_price'=>$request->bestproduct_price,
         
            
          
             
    
    
    
        ];
    
            if($request->hasFile('bestproduct_img')){
            $path = $request->file('bestproduct_img');
            $path = $request->bestproduct_img->store('public/media');
            $path = basename($path);
            $Bestseller['brand_logo']= $path;
         }
    
        //
    
        
        Bestseller::insert($Bestseller);
    
        return redirect()->route('view-bestsellerlist')->withSuccess('Great! Data successfully insert with validation.');
       
        }
    
        public function updatebestseller(Request $request){
    
    
    
    
            $Bestseller=Bestseller::find($request->id);
    
            $Bestseller->brand_name= $request->brand_name;
    
    
    
            if($request->hasFile('brand_logo')){
            $path = $request->file('brand_logo');
            $path = $request->brand_logo->store('public/media');
            $path = basename($path);
            $Bestseller->brand_logo = $path;
            }
    
    
    $Bestseller->save();
     return redirect()->route('view-bestsellerlist',$request->id)->withSuccess('Great! Record Has been update successfully');
    }
        
     public function deletebrandlogo(request $request , $id)
        {
           
        $delete=Bestseller::find($id)->delete();
        return  redirect()->route('view-bestsellerlist',$delete)->withSuccess('Great! Record Has been Delete successfully ');
        }
  
}
