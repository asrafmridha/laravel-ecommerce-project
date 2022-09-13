<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Multi;
use App\Models\Backend\Slider;
use Illuminate\Http\Request;
use Image;
use File;

class SliderController extends Controller
{
    public function addsliderview(){

        return view('backend.pages.slider.addsliderview');
    }

    public function sliderstore(Request $request){

        $request->validate([

            'category'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image'=>'required',
            'link'=>'required',
            'status'=>'required',
        
      
             ]);

        if($request->image){
            $image=$request->File('image');
            $customname=rand().".".$image->getClientOriginalExtension();
            $location= public_path('backend/slider/'.$customname);
            Image::make($image)->save($location);
        }

         $slider=new Slider;
         $slider->category='hlw';
         $slider->title=$request->title;
         $slider->description=$request->description;
         $slider->image=$customname;
         $slider->link=$request->link;
         $slider->status=$request->status;
         $slider->save();

         return back()->with('message','Slider added Successfully');


    }

    public function manageslider(){
 
        return view('backend.pages.slider.manageslider');
    }

    public function showdata(){

        $manageslider=Slider::all();

        return response()->json([

         'status'=>'success',
         'alldata'=>$manageslider

        ]);


    }

    public function multi(){

        $multi=Slider::all();

        return view('backend.pages.slider.multi',compact('multi'));
    }

    public function multistore(Request $request){

        if($request->multiimage){
            foreach($request->file('multiimage') as $image){
                $customname=rand().".".$image->getClientOriginalExtension();
                $location= public_path('backend/slider/multi/'.$customname);
                Image::make($image)->save($location);

                $multi=new Multi;
                $multi->slider_id=$request->slider_id;
                $multi->image=$customname;
                $multi->save();

            }

        
            return back()->with('message','Multi Images add Successfully');
        }
    }
}
