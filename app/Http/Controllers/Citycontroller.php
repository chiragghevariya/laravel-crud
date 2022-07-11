<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Citycontroller extends Controller
{
    //
    public function listing(){

    	$getallcity = \App\Models\City::simplepaginate(3);

    	return view('city.listing', compact('getallcity'));
    }

    public function create(){

        $getallcountry = \App\Models\Country::get();
        // dd($getallcountry);
        $getallstate = \App\Models\State::get();
        	// dd($getallstate); 
    	return view ('city.add-form',compact('getallcountry','getallstate'));
    }

    public function savecreate(Request $request){

     $obj = new \App\Models\City;
     $obj->country_name = $request->country;
     $obj->state_name = $request->state;
     $obj->city_name = $request->city;
     $obj->status = $request->status;
          /**database field name/form name**/  
     $obj->save();

     return redirect()->route('city.listing');
    }

    public function edit($parameter){
          
         $getallcountry = \App\Models\Country::get();
         $getallstate = \App\Models\State::get();
         $editdata = \App\Models\City::where('id',$parameter)->firstOrfail();


        return view('city.edit-form',compact('editdata','getallcountry','getallstate'));
    }

    public function update(Request $request){

     $obj = \App\Models\City::where('id',$request->form_edit)->first();
     $obj->country_name = $request->country;
     $obj->state_name = $request->state;
     $obj->city_name = $request->city;
     $obj->status = $request->status; 
         /**database field name/form name**/
     $obj->save();

     return redirect()->route('city.listing');
    } 

     public function delete($parameterID){

     $obj = \App\Models\City::where('id',$parameterID)->first();
     $obj->delete();

     return redirect()->route('city.listing');
}
}
