<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Subcategory;
use Illuminate\Http\Request;

class MyApiController extends Controller
{
   public function alldta(){

    $alldata= Subcategory::all();

    return response()->json([

         'alldata'=>$alldata

    ]);
   }

   public function store(Request $request){
        
      if($request->token=='asraf1234'){
        $subcategory= new Subcategory;
        $subcategory->cat_id=$request->cat_id;
        $subcategory->slug=$request->slug;
        $subcategory->name=$request->name;
        $subcategory->status=$request->status;
        $subcategory->save();

        if($subcategory->save()){
            return response()->json([

                'status'=>'success',

            ]);
        }
      }

        else{

            return response()->json([

                'status'=>'404',

            ]);


        }
   }
}
