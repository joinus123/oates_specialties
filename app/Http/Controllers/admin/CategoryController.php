<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function  viewcategory(){
         $Category=Category::all();
        return view('admin.category.viewcategory')->with('Category' ,$Category);
       
    }


        public function  addcategory()
    {
        return view('admin.category.addcategory');
    }
       
    public function  editcategory($id){
        $view['view']=Category::find($id);
        return view('admin.category.editcategory',$view);
    }
    
    public function  submitcategory(Request $request)
    {
        // dd($request->all());
         $Category = request()->validate([
    
            'category_name'=> 'required',
           
            
        ]);
    
          $Category = [
    
    
    
            'category_name'=>$request->category_name,
       
    
    
    
        ];
    
        
        Category::insert( $Category);
    
        return redirect()->route('view-category')->withSuccess('Great! Data successfully insert with validation.');
       
        }
    
        public function updatecategory(Request $request){
    
    
    
    
             $Category=Category::find($request->id);
    
             $Category->category_name= $request->category_name;
    
    
    
    
    
      $Category->save();
     return redirect()->route('view-category',$request->id)->withSuccess('Great! Record Has been update successfully');
    }
        
     public function deletecategory(request $request , $id)
        {
            // dd('ffgfgfgf');
           
        // $delete=DB::table('category')->where('id', $id)->delete();
        $delete=Category::find($id)->delete();
        return  redirect()->route('view-category',$delete)->withSuccess('Great! Record Has been Delete successfully ');
        }
    }