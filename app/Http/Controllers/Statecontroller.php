<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Statecontroller extends Controller
{
    //
    public function listing(){

        $getallstate = \App\Models\State::simplepaginate(3);
    	return view('state.listing',compact('getallstate'));
    }


    public function create(){

    	$getallcountry = \App\Models\Country::get();

        return view('state.add-form',compact('getallcountry'));

    }

    public function savecreate(Request $request){

     $obj = new \App\Models\State;
     $obj-> country_name = $request->country;
     $obj-> state_name = $request->statename;
     $obj-> status = $request->status;
     

          /**database field name/form name**/
     $obj->save();

     return redirect()->route('state.listing');
    }



}
