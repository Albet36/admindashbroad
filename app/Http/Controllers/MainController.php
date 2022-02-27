<?php

namespace App\Http\Controllers;

use App\Models\LoginModel;
use App\Models\MainModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class MainController extends Controller
{
   public function home(){
       $users = MainModel::all();
       $count = MainModel::count();
       if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
       return view("template.index",["users"=>$users,"count"=>$count],$data);
   }
  
public function chart(){
    if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
    return view("template.chart",$data);
}
public function table(){
    if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
    $users = MainModel::all();
    return view("template.table",["users"=>$users],$data);
}
public function add(){
    if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
    return view("template.add",$data);
}
public function edit($id){
    if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
    $users = MainModel::FindOrFail($id);
    return view("template.edit",["users"=>$users],$data);
}
public function chat(){
    if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
    return view("template.chat",$data);
}
public function profile(){
    if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
 if (session()->has('Admin')) {
    if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
  $admin = LoginModel::where('id','=', session('Admin'))->first();
        $data = ['InforAcc'=>$admin];
 }
        return view("template.profile",$data);
}
/*request function */
    public function saveUser(Request $request){
        $age = request()->get("age");
        $email = request()->get("email");
        $fullname = request()->get("fullname");
        $address = request()->get("address");
        $phone = request()->get("phone");
        $money = request()->get("money");
        $position = request()->get("position");
        $saveUser = MainModel::create([
        "age"=>$age,
        "email"=>$email,
        "fullname"=>$fullname,
        "address"=>$address,
        "phone"=>$phone,
        "money"=>$money,
        "position"=>$position,
        ]);
        return Redirect()->to('admin/listUsers');
    }
   public function updateUser(Request $request, $id){
    $updateUser = MainModel::FindOrFail($id);
    $updateUser->update([
        "age"=>request()->get("age"),
        "email"=>request()->get("email"),
        "fullname"=>request()->get("fullname"),
        "address"=>request()->get("address"),
        "phone"=>request()->get("phone"),
        "money"=>request()->get("money"),
        "position"=>request()->get("position")
]);
return Redirect()->to('admin/listUsers');
   }
   public function deleteUser($id){
       $delete = MainModel::FindOrFail($id);
       $delete->delete($id);
       return Redirect()->to('admin/listUsers');
   }
   public function search(Request $request){
    if (session()->has('Admin')) {
        $admin = LoginModel::where('id','=', session('Admin'))->first();
              $data = ['InforAcc'=>$admin];
       }
    $search = request()->get("search");
    $result = LoginModel::where('fullname','like','%'.$search.'%')->get();
    return view('template.search',["result"=>$result],$data);
   }
}
