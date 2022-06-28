<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bannercontroller extends Controller
{
    //
    public function index(){
    	return view ('banner.listing');
    }
}
