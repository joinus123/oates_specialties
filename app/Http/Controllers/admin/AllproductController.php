<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use App\Models\Category;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class AllproductController extends Controller
{
    public function  viewproduct(){
    $product=Products::all();
    return view('admin.allproduct.viewproduct')->with('product',$product);
   
}


    public function  addproduct()
{   
    $category=Category::all();
    return view('admin.allproduct.addproduct')->with('category',$category);
}
   
   public function  editproduct($id){
    
    $view['view']=Products::find($id);
    $category['category']=Category::all();
    return view('admin.allproduct.editproduct',$view,$category);
   
}

public function  submitproduct(Request $request)
{

    // dd($request->all());
   
        $Product= request()->validate([

        'name'=> 'required',
        'orignal_price'=> 'required',
        'price'=> 'required',
        'discounted_price'=> 'required',
        'new_product'=> 'required',
        'seller_product'=> 'required',
        'featured_product'=> 'required',

    ]);
   
    // dd($request->all());
     $Product = [



        'name'=>$request->name,
        'category_id'=>$request->category,
        'orignal_price'=>$request->orignal_price,
        'discounted_price'=>$request->discounted_price,
        'price'=>$request->price,
        'new_store_product'=>$request->new_product,
        'best_seller'=>$request->seller_product,
        'featured_product'=>$request->featured_product,
        


    ];
    // dd($Product);
    
    if($request->hasFile('image')){
        $path = $request->file('image');
        $path = $request->image->store('public/media');
        $path = basename($path);
        $Product['image'] = $path;
        }

    
    Products::insert($Product);

    return redirect()->route('view-product')->withSuccess('Great! Data successfully insert with validation.');
   
    }

    public function updateproduct(Request $request){




       $Product=Products::find($request->id);

       $Product->name= $request->name;
       $Product->category_id=$request->category;
       $Product->orignal_price= $request->orignal_price;
       $Product->discounted_price= $request->discounted_price;
       $Product->price= $request->price;
       $Product->best_seller=$request->seller_product;
       $Product->new_store_product=$request->new_product;
       $Product->featured_product=$request->featured_product;
    


        if($request->hasFile('image')){
        $path = $request->file('image');
        $path = $request->image->store('public/media');
        $path = basename($path);
        $Product->image = $path;
        }


$Product->save();
 return redirect()->route('view-product',$request->id)->withSuccess('Great! Record Has been update successfully');
}
    
     public function deleteproduct(request $request , $id)
    {
       
    $delete=Products::find($id)->delete();
    return  redirect()->route('view-product',$delete)->withSuccess('Great! Record Has been Delete successfully ');
    }
       
}        