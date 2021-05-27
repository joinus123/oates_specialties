<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
class SigninController extends Controller
   {
        public function  logout(Request $request){
        $request->session()->flush();
        return \redirect(route('loginform'));
       
    }
    public function  loginForm(Request $request){
        return view('admin.login.signin');
    }


    public function  forgetpassword(Request $request){
        return view('admin.login.forgot_password');
    }
    public function admindashboard(Request $request)
{
      $user=User::whereEmail($request->email)->where('Isadmin',1)->first();



        if(!empty($user)){
            if(Hash::check($request->password,$user->password))
            {

                session(['admin'=>$user]);
                return \redirect(route('dashboard'));
            }
            else{
                // return redirect()->back()->withInput();
                // dd(redirect()->back()->withError('invalid email or password given'));
                return redirect()->back()->withError('invalid email or password given');
            }


        }else
                 {
                    return redirect()->back()->withError('invalid email or password given');

                 }
}
   }