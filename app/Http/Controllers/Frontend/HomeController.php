<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // $subcategory = Subcategory::where('status',1)->get();
        // $products = Product::where('status',1)->get();
        // $sliders = Slider::where('status', 1)->get();
          $categories = Category::all();
        return view('frontend.home',compact('categories','sliders','products','subcategory',));
       }
}
