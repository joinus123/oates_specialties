<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productdetail;
use App\Models\Products;

class ProductdetailController extends Controller
{
    public function  viewproductdetail(){
        
        return view('admin.productdetail.productimagelist');
       
    }
    public function  addproductdetail()
    {   
        $products=Products::all();
        return view('admin.productdetail.addproductimage')->with('products', $products);
    }
       
       public function  editproduct($id){
        
      
        return view('admin.productdetail.editproductimage');
       
    }
    
    public function  submitproduct(Request $request)
    {
    
        // dd($request->all());
       
            $Product= request()->validate([
    
            'name'=> 'required',
            'product_description'=>'required',
            'price'=> 'required',
            'discounted_price'=> 'required',
            'new_product'=> 'required',
            'seller_product'=> 'required',
            'featured_product'=> 'required',
    
        ]);
       
        // dd($request->all());
         $Product = [
    
    
    
            'name'=>$request->name,
            'product_description'=>$request->product_description,
            'category_id'=>$request->category,
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
    
         
    
           $Product->product_description= $request->product_description;
           $Product->name= $request->name;
           $Product->category_id=$request->category;
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
