<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function  viewContact()
    {
        $Contacts['Contacts']=Contact::all();
        return view('admin.contact.list',$Contacts);
    }

    public function  addContact()
    {
        return view('admin.contact.add');
    }
    public function  editContact($id){
    
      
        $editcontacts['editcontacts']=Contact::find($id);
        return view('admin.contact.edit',$editcontacts);
       
    }
    public function  submitContact(Request $request){
        // dd($request->all());
        $contact= request()->validate([

         'icon'=> 'required',
         'heading'=>'required',
         'text'=>'required',
    ]);
   
    
         $contact=[
        'icon'=>$request->icon,
        'heading'=>$request->heading,
        'text'=>$request->text,
     
];

  
    

    
     Contact::insert($contact);

     return redirect()->route('view-contact')->withSuccess('Great! Data successfully insert with validation.');
   
    }
    public function updateContact(Request $request){




        $contact=Contact::find($request->id);
        
        $contact->icon= $request->icon;
        $contact->heading= $request->heading;
        $contact->text= $request->text;

 
      
 
 
         $contact->save();
         return redirect()->route('view-contact',$request->id)->withSuccess('Great! Record Has been update successfully');
    }
     
          public function deleteContact(request $request , $id)
          {
     
        
     $delete=Contact::find($id)->delete();
     return  redirect()->route('view-contact',$delete)->withSuccess('Great! Record Has been Delete successfully ');
     }
}
