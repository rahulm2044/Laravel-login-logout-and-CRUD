<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
   public function home(){
       $users = User::select('id','name','email')->get();
       return view('home',['users'=>$users]);
   }
}
