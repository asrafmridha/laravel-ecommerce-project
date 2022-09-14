<?php

use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SocailController;


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

// All Social Item Here

Route::get('gotogoogle',[SocailController::class,'gotogoogle'])->name('gotogoogle');

Route::get('/google/login',[SocailController::class,'googlestore'])->name('googlestore');


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

    Route::get('manageslider',[SliderController::class,'manageslider'])->name('manageslider');

    Route::get('/sliderdatatable',[SliderController::class,'showdata']);

    Route::get('/multiview',[SliderController::class,'multi'])->name('slider.multi');

    Route::get('/sliderdatadestroy/{id}',[SliderController::class,'sliderdatadestroy']);


    

    Route::post('/multistore',[SliderController::class,'multistore'])->name('slider.multistore');


    

    
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

    Route::get('manageproductview',[ProductController::class,'manageproductview'])->name('manageproductview');
    Route::get('/manageproduct',[ProductController::class,'manageproduct']);

     Route::get('statuschange/{id}',[ProductController::class,'statuschange'])->name('statuschange');

     Route::get('/deletesubproduct/{id}',[ProductController::class,'delete']);


    Route::get('/updateproductview/{id}',[ProductController::class,'updateproductview']); 

    Route::post('/updateproduct/{id}',[ProductController::class,'updateproduct']);


    
    });

