<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiCrudController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('students',[ApiCrudController::class,'index']);
Route::post('students',[ApiCrudController::class,'store']);
Route::delete('students/{id}',[ApiCrudController::class,'destroy']);
Route::put('students/{id}',[ApiCrudController::class,'update']);
Route::get('students/{id}',[ApiCrudController::class,'show']);

