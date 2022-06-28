<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bannercontroller extends Controller
{
    //
    public function index(){

    	// $getAllBanner = \App\Models\Banner::get();
    	// $getAllBanner = \App\Models\Banner::paginate(3); /*for pagination*/
    	$getAllBanner = \App\Models\Banner::simplepaginate(3); /*for pagination*/

  
    	return view ('banner.listing',compact('getAllBanner'));
    }



public function create(){

	return view ('banner.add_form');

}

}