<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Countrycontroller extends Controller
{
    //

    public function listing(){

    	$getallcountries = \App\Models\Country::simplepaginate(3);

    	return view('country.listing', compact('getallcountries'));
    }


    public function create(){

    	return view ('country.add-form');
    }


    public function savecreate(Request $request){

     $obj = new \App\Models\Country;
     $obj-> country_name = $request->name_of_country;
          /**database field name/form name**/
     $obj->save();

     return redirect()->route('country.listing');
    }


   public function edit($parameter){

	 $editdata = \App\Models\Country::where('id',$parameter)->firstOrfail();

	 return view('country.edit-form',compact('editdata'));

   }


   public function update(Request $request){

     $obj = \App\Models\Country::where('id',$request->edit_record_id)->first();
     $obj->country_name = $request->name_of_country;     /**database field name/form name**/
     $obj->save();

     return redirect()->route('country.listing');

   }

   public function delete($parameterID){

     $obj = \App\Models\Country::where('id',$parameterID)->first();
     $obj->delete();

     return redirect()->route('country.listing');
}




}
