<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adminltcontroller extends Controller
{
    //
public function listing(){

	return view('adminlt.listing');
}

public function newlisting(){

	return view('adminlt.newlisting');
}

}