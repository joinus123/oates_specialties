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
        return view('admin.Contact.list',$Contacts);
    }

    public function  addContact()
    {
        return view('admin.Contact.add');
    }
    public function  editContact($id){
    
      
        $editcontacts['editcontacts']=Contact::all();
        return view('admin.Contact.edit',$editcontacts);
       
    }
    public function  submitContact(Request $request){

        $contact= request()->validate([

         'icon'=> 'required',
         'heading'=>'required',
         'text'=>'required',
    ]);
   
    // dd($request->all());
    $contact=[

   'heading'=>$request->heading,
   'text'=>$request->text,
     
];

  
     // dd($Product);
    
    if($request->hasFile('icon')){
        $path = $request->file('icon');
        $path = $request->icon->store('public/media');
        $path = basename($path);
       $contact['icon'] = $path;
 }

    
     Contact::insert($contact);

     return redirect()->route('view-contact')->withSuccess('Great! Data successfully insert with validation.');
   
    }
    public function updateContact(Request $request){




        $contact=Contact::find($request->id);
 
        $contact->heading= $request->heading;
        $contact->text= $request->text;

 
         if($request->hasFile('icon')){
         $path = $request->file('icon');
         $path = $request->icon->store('public/media');
         $path = basename($path);
         $contact->icon = $path;
         }
 
 
         $contact->save();
         return redirect()->route('view-contact',$request->id)->withSuccess('Great! Record Has been update successfully');
    }
     
          public function deleteContact(request $request , $id)
          {
     
        
     $delete=Contact::find($id)->delete();
     return  redirect()->route('view-contact',$delete)->withSuccess('Great! Record Has been Delete successfully ');
     }
}
