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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/posts','Api\PostController@get');


Route::post('login','Api\LoginController@login');
Route::get('logout','Api\LoginController@logout')->middleware('auth:sanctum');
Route::get('products','Api\ProductController@index')->middleware('auth:sanctum');