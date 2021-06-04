<?php

namespace App\Http\Controllers\frontend;
use  App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;
use App\Models\Bannerslider;
use App\Models\Brandlogo;
use App\Models\Ourblog;
use App\Models\Sitesetting;
use App\Models\Socialmedialink;

class AppController extends Controller
{
    public function homepage()
    {
       
        $new_store_products = Products::where('new_store_product', 1)->get();
        $new_store_products = $new_store_products->toArray();
        
        $best_sellers = Products::where('best_seller', '1')->get();
        $best_sellers =  $best_sellers->toArray();
       
        $featured_products = Products::where('featured_product', '1')->get();
        $featured_products =  $featured_products->toArray();


        $bannersliders=Bannerslider::all();
        $Categorys=Category::all();
        $Sitesettings=Sitesetting::all();
        $brandlogos=Brandlogo::all();
        $ourblogs=Ourblog::all();
        $socialmedialinks=Socialmedialink::all();

        return view('frontend.index', compact('new_store_products','best_sellers','featured_products','bannersliders','brandlogos','Categorys','ourblogs','socialmedialinks','Sitesettings'));

      
      
       
    }     
    
    public function productcategory($id)
    {
        $Categorys=Category::all();
        $Sitesettings=Sitesetting::all();
        $product=Products::where('category_id', $id)->get();
        $Category_id=Category::where('id', $id)->get();
        $Category_id = $Category_id->toArray();
     // $new_store_product=Products::where('new_store_product',1)->get();
        //dd($new_store_product->toArray());
         return view('frontend.allproduct')->with([ 'Categorys'=>$Categorys,'product'=>$product,'Category_id'=>$Category_id,'Sitesettings'=>$Sitesettings]);
        // $new_store_products = Products::where('category_id', $id)->get();
        // $new_store_products=$new_store_products->toArray();
        // dd($new_store_products);
      
    }

    public function account()
    {
 
        $Categorys=Category::all();
        $Sitesettings=Sitesetting::all();
        return view('frontend.myaccount')->with(['Categorys'=>$Categorys,'Sitesettings'=>$Sitesettings]);
    }
       public function aboutus()
    {

        $Categorys=Category::all();
        $Sitesettings=Sitesetting::all();
        return view('frontend.about_us')->with(['Categorys'=>$Categorys,'Sitesettings'=>$Sitesettings]);
    }
       public function video()
    {
       $Categorys=Category::all();
       $Sitesettings=Sitesetting::all();
        return view('frontend.video')->with(['Categorys'=>$Categorys,'Sitesettings'=>$Sitesettings]);
    }
    public function orderstatus()
    {
         $Categorys=Category::all();
         $Sitesettings=Sitesetting::all();
        return view('frontend.orderstatus')->with(['Categorys'=>$Categorys,'Sitesettings'=>$Sitesettings]);
    }
    public function wishlist()
    {
       $Categorys=Category::all();
 
        return view('frontend.wishlist')->with('Categorys',$Categorys);
    }

    public function addcart()
    {
       $Categorys=Category::all();
       $Sitesettings=Sitesetting::all();
        return view('frontend.addcart')->with(['Categorys'=>$Categorys,'Sitesettings'=>$Sitesettings]);
    }
      public function checkout()
    {
       $Categorys=Category::all();
       $Sitesettings=Sitesetting::all();
        return view('frontend.checkout')->with(['Categorys'=>$Categorys,'Sitesettings'=>$Sitesettings]);
    }
    public function allproduct()
    {
    
       $Categorys=Category::all();
       $product=Products::all();
       $Sitesettings=Sitesetting::all();
       return view('frontend.allproduct')->with([ 'Categorys'=>$Categorys,'product'=>$product,'Sitesettings'=>$Sitesettings]);
    }
  
}
