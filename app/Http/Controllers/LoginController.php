<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function register(){
        return view("auth.register");
    }
    public function createRegister(Request $request){

    }
    /*check require login */
    public function authCheck(Request $req){
      $req->validate([
          "username"=>'required|min:5|max:50',
          "password"=>'required|min:5|max:50',
      ]);
      $AccUser = LoginModel::where('username','=', $req->username)->first();
      if(Hash::check($req->password, $AccUser->password)){
          $req->session()->put('Admin',$AccUser->id);
          return redirect()->to('/');
        }
    }
    /*register */
    public function regisAcc(Request $req){
        $req->validate([
            "images"=>'required|min:5',
            "username"=>'required|min:5|max:50',
            "password"=>'required|min:5|max:50',
            "repassword"=>'required_with:password|same:password|min:5|max:50',
            "email"=>'required|min:5|max:50|unique:User',
            "position"=>'required|min:5|max:50',
        ]);
        $registerAcc = new LoginModel();
        $registerAcc->images = $req->images;
        $registerAcc->username = $req->username;
        $registerAcc->password = Hash::make("$req->password");
        $registerAcc->email = $req->email;
        $registerAcc->position = $req->position;
        $registerAcc->save();
        return redirect()->to('/login');
      }
      /*logout */
      function logout(){
          if(session()->has('Admin')){
              session()->pull('Admin');
          }
          return redirect()->to('/login');
      }
      
}
