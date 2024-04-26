<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("/events", "App\Http\Controllers\EventosController@index");
Route::get("/event/{eventos}", "App\Http\Controllers\EventosController@show");

Route::post("/purchase", "App\Http\Controllers\ClienteController@store");
Route::get("/orders/{cliente}", "App\Http\Controllers\ClienteController@show");
