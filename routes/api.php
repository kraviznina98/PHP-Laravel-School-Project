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
Route::get('zanrs', 'App\Http\Controllers\ZanrController@getAll');
Route::get('zanrs/{id}', 'App\Http\Controllers\ZanrController@getById');
Route::get('books', 'App\Http\Controllers\BookController@getAll');
Route::get('books/{id}', 'App\Http\Controllers\BookController@getById');
Route::post('zanrs', 'App\Http\Controllers\ZanrController@save');
Route::post('books', 'App\Http\Controllers\BookController@save');
Route::delete('zanrs/{id}', 'App\Http\Controllers\ZanrController@delete');
Route::delete('books/{id}', 'App\Http\Controllers\BookController@delete');
