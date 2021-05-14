<?php

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

Route::get('/', 'App\Http\Controllers\ZanrController@all');
Route::get('/{zanr}', 'App\Http\Controllers\ZanrController@view');
Route::get('/{zanr}/{id}', 'App\Http\Controllers\BookController@view');
Route::post('/add-book', 'App\Http\Controllers\BookController@create');
Route::post('/add-zanr', 'App\Http\Controllers\ZanrController@create');
