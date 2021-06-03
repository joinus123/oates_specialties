<?php

namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Category;
class CartController extends Controller
{
    
    
    public function add(Request$request){
    //    dd($request->all());
            \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
            'img' => $request->image,
            'slug' => $request->slug
            )
           ));
          
            
           return redirect()->route('order-status')->with('success_msg', 'Item is Added to Cart!');
    }
    
    
        public function cart()  {
            $category =Category::all();
            $product=Products::all();
        $cartCollection = \Cart::getContent();
       // dd($cartCollection);
        return view('frontend.wishlist')->with(['cartCollection' => $cartCollection,'product'=>$product,'Categorys'=>$category]);;
    }

   
}
