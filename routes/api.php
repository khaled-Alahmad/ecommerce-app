<?php

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ApiProductController;
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
//Route::get('products',[ApiProductController::class,'index']);
//Route::post('products/store',[ApiProductController::class,'store']);
//Route::get('products/{id}',[ApiProductController::class,'show']);



//public
//Route::resource('products',ApiProductController::class);
Route::get('products/search/{name}',[ApiProductController::class,'search']);
Route::post('register',[ApiAuthController::class,'register']);
Route::post('login',[ApiAuthController::class,'login']);

Route::get('products',[ApiProductController::class,'index']);
Route::get('products/{id}',[ApiProductController::class,'show']);

//protected
Route::group(['middleware' =>[ 'auth:sanctum']],function (){
    Route::post('products/store',[ApiProductController::class,'store']);
    Route::put('products/update/{id}',[ApiProductController::class,'update']);
    Route::delete('products/delete/{id}',[ApiProductController::class,'destroy']);
    Route::post('logout',[ApiAuthController::class,'logout']);

});
