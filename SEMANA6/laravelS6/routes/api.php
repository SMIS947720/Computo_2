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

//listar todas las categorias

Route::get('categories','App\Http\Controllers\CategoryController@index');
//listas un cate
Route::get('category/{id}','App\Http\Controllers\CategoryController@show');
//crear una cate
Route::post('category','App\Http\Controllers\CategoryController@store');
//actualiza
Route::put('category','App\Http\Controllers\CategoryController@store');
//eliminar
Route::delete('category/{id}','App\Http\Controllers\CategoryController@destroy');

