<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
         function productview(){

            return view('backend.pages.product');
         }

         function addproduct(Request $request){

            $request->validate([

               'product_name'=>'required',
               'product_price'=>'required',
               'product_code'=>'required',
               'short_description'=>'required',
               'quantity'=>'required',
               'short_description'=>'required',
               'thumbnails'=>'required',
               'status'=>'required',
         
         
                ]);
   

            if($request->image){
               $image=$request->file('image');
               $customname=rand().".".$image->getClientOriginalExtension();
               $location= public_path('backend/product/'.$customname);
               Image::make($image)->save($location);
           }

            $product =new Product;
            $product->vendor_id=1;
            $product->cat_id=1;
            $product->subcat_id=1;
            $product->product_name=$request->product_name;
            $product->product_price=$request->product_price;
            $product->discount=$request->discount;
            $product->discount_price=$request->discount_price;
            $product->product_code=$request->product_code;
            $product->short_description=$request->short_description;
            $product->long_description=$request->long_description;
            $product->quantity=$request->quantity;
            $product->status=$request->status;
            $product->slug=Str::slug($request->product_name);
            $product->thumbnails= $customname;

            $product->save();



         }
}
