<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersTableController extends Controller
{
   public function show(){
        $users = new User();
        return view('userstable', ['users'=>$users->all()]);
   }
}
