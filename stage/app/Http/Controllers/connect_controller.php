<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\admin;
use DB;

class connect_controller extends Controller
{
    public function lg( ){
      
        return view('connexion');
           }
           public function conn(Request $req){
               
              
               $req->validate([
                   
                   'username'=>'required',
                   'password'=>'required'
                   ]);
                  $ct= admin::where('username',$req->username)->where('password',$req->password)->get();
              if($ct->count()>0){
                 $req->session()->put('data',$req->input());
                  return  redirect('stock');
              }
                else{
                   return  redirect('connexion');
                } 
               
       
       }
       public function deco(Request $rq){
           $rq->session()->flush();
           return redirect('connect');
       }
       public function profile(){
           return view('profile');
       }
       public function modify(Request $req){
               
              
           $req->validate([
               
               'username'=>'required',
               'password'=>'required',
               'NPassword'=>'required'
               ]);
            
            DB::table('admins')->where([ 'password' => $req->password])->update(['username' => $req->username,'password' => $req->NPassword]);
       
                  return redirect('logout');
              
       
            
       }
}
