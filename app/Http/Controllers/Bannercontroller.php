<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bannercontroller extends Controller
{
    //
public function index(){

    	// $getAllBanner = \App\Models\Banner::get();
    	// $getAllBanner = \App\Models\Banner::paginate(3); /*for pagination*/
    	// $getAllBanner = \App\Models\Banner::orderBy('id','DESC')->paginate(20); /*for pagination*/
    	$getAllBanner = \App\Models\Banner::orderBy('id','ASC')->paginate(20); /*for pagination*/
        $getAllBanner = \App\Models\Banner::simplepaginate(3); /*for pagination*/

  // DESC = latest will first
  // ASC = oldest will first

    return view ('banner.listing',compact('getAllBanner'));
    }


// this function is used to show add form of banner

public function create(){

	return view ('banner.add_form');

}


// this function is used to save add form data

public function store(Request $request){

     $obj = new \App\Models\Banner;
     $obj->name = $request->name_of_form;
     $obj->link = $request->name_of_link;     /**database field name/form name**/
     $obj->save();

     return redirect()->route('banner.index');
}


// this function is used to get edit form 

public function edit($parameter){

	$editdata = \App\Models\Banner::where('id',$parameter)->firstOrfail();

	return view('banner.edit_form',compact('editdata'));

}


// this function is used to update form when u open edit form

public function update(Request $request){

     $obj = \App\Models\Banner::where('id',$request->edit_record_id)->first();
     $obj->name = $request->name_of_form;
     $obj->link = $request->name_of_link;     /**database field name/form name**/
     $obj->save();

     return redirect()->route('banner.index');
}


// this function is used to delete record

public function delete($parameterID){

     $obj = \App\Models\Banner::where('id',$parameterID)->first();
     $obj->delete();

     return redirect()->route('banner.index');
}

}