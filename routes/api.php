<?php

use App\Http\Controllers\Backend\ApiUserController;
use App\Http\Controllers\backend\MyApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/alldata',[MyApiController::class,'alldta']);
Route::post('/store',[MyApiController::class,'store']);

Route::get('/add',[ApiUserController::class,'add']);

Route::post('/adduser',[ApiUserController::class,"adduser"])->name('adduser');

Route::get("/userview/{id}",[ApiUserController::class,'userview'])->name('userview');

Route::post('update/{id}',[ApiUserController::class, "update"])->name('update');
