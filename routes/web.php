<?php

use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';


//Route for Slider

Route::group(['prefix'=>'/slider'],function(){

    Route::get('/addsliderview',[SliderController::class,'addsliderview'])->name('addsliderview');
    
    Route::post('/store',[SliderController::class,'sliderstore'])->name('sliderstore');
    
    });

// Route group for subcategory 
Route::group(['prefix'=>'/subcategoey'],function(){

Route::get('subcategoryview',[SubCategoryController::class,'subcategoryview'])->name('subcategoryview');

Route::post('/addsubcategory',[SubCategoryController::class,'addsubcategory']);
Route::get('/datatable',[SubCategoryController::class,'showtable']);
Route::get('/deletesubcategory/{id}',[SubCategoryController::class,'delete']);
Route::get('/updatesubcategoryview/{id}',[SubCategoryController::class,'updateview']);
Route::post('/updatesubcategory/{id}',[SubCategoryController::class,'update']);


});

// Route group for Product


   Route::group(['prefix'=>'/product'],function(){

    Route::get('productview',[ProductController::class,'productview'])->name('productview');
    
    Route::post('addproduct',[ProductController::class,'addproduct'])->name('addproduct');
    
    
    });

