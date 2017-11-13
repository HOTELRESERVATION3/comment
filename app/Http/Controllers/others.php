<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class others extends Controller
{
    //
    public function aboutus(){

    	return view("aboutus");
    }
     public function offers(){

    	return view("offers");
    }
}
