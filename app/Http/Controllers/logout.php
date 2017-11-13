<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class logout extends Controller
{
    public function index()
    {
       return view('logout');
    }
     public function user_logout(Request $request){

        $user=Sentinel::logout();
        return view('login');
     }
}
