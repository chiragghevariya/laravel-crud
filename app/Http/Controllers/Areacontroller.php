<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Areacontroller extends Controller
{
    //
    public function listing(){

       $getallarea = \App\Models\Area::simplepaginate(3);
 
    	return view('area.listing',compact('getallarea'));
    }

     public function create(){

        $getallcountry = \App\Models\Country::get();
        $getallstate = \App\Models\State::get();
        $getallcity = \App\Models\City::get();

    	return view('area.add-form',compact('getallcountry','getallstate','getallcity'));
    }

    public function savecreate(Request $request){

     $obj = new \App\Models\Area;
     $obj->country_name = $request->country;
     $obj->state_name = $request->state;
     $obj->city_name = $request->city;
     $obj->area_name = $request->area;
     $obj->status = $request->status;
          /**database field name/form name**/  
     
     $obj->save();

     return redirect()->route('area.listing');
    }

    public function edit($parameter){

    	 $getallcountry = \App\Models\Country::get();
         $getallstate = \App\Models\State::get();
         $getallcity = \App\Models\City::get();
         $editdata = \App\Models\Area::where('id',$parameter)->firstOrfail();


        return view('area.edit-form',compact('editdata','getallcountry','getallstate','getallcity'));
    }

     public function update(Request $request){

     $obj = \App\Models\Area::where('id',$request->form_edit)->first();
     $obj->country_name = $request->country;
     $obj->state_name = $request->state;
     $obj->city_name = $request->city;
     $obj->area_name = $request->area;
     $obj->status = $request->status; 
         /**database field name/form name**/
     $obj->save();

     return redirect()->route('area.listing');
    } 

     public function delete($parameterID){

     $obj = \App\Models\Area::where('id',$parameterID)->first();
     $obj->delete();

     return redirect()->route('area.listing');
}
}
