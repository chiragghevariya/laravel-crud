<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productcontroller extends Controller
{
    //
    public function listing(){
      
      $getalldata = \App\Models\Product::simplepaginate(5);

     return view('product.listing',compact('getalldata'));
    }


    public function create(){
      
     $getallcountry = \App\Models\Country::get();

     return view('product.add-form',compact('getallcountry'));
    }

    public function savecreate(Request $request){

     $obj = new \App\Models\Product;
     $obj->product_name = $request->pname;
     $obj->product_type = $request->ptype;
     $obj->product_country = $request->pcountry;
     $obj->gender = $request->gender;
     $obj->status = $request->status;
     $obj->confirm = $request->confirm;
          /**database field name/form name**/  
     
     $obj->save();

     return redirect()->route('product.listing');
    }

    public function edit($parameter){
      
     $getallcountry = \App\Models\Country::get();
     $geteditdata =  \App\Models\Product::where('id',$parameter)->firstOrfail();

     return view('product.edit-form',compact('getallcountry','geteditdata'));
    }

    public function saveedit(Request $request){

     $obj =  \App\Models\Product::where('id',$request->editform)->firstOrfail();
     $obj->product_name = $request->pname;
     $obj->product_type = $request->ptype;
     $obj->product_country = $request->pcountry;
     $obj->gender = $request->gender;
     $obj->status = $request->status;
     $obj->confirm = $request->confirm;
          /**database field name/form name**/  
     
     $obj->save();

     return redirect()->route('product.listing');
    }

    public function delete($parameterID){

     $obj = \App\Models\Product::where('id',$parameterID)->first();
     $obj->delete();

     return redirect()->route('product.listing');
    }

    public function view($parameterid){

     $viewdata =  \App\Models\Product::where('id',$parameterid)->firstOrfail();
     
     return view('product.view-form',compact('viewdata'));
    }
}
 