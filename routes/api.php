<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ruta1', function (Request $request) {
    return [
        ["nombre"=>"Christian"],
        ["nombre"=>"Francisco"],
        ["nombre"=>"Jonathan"],
        ["nombre"=>"Taco"],
        ];
});

Route::get('/ruta2', 'KFCController@ruta2');
Route::get('/ruta3', 'KFCController@ruta3');
Route::get('/ruta4', 'KFCController@ruta4');
