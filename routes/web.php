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
Route::get('/{zanr}/{id}', 'App\Http\Controllers\FilmController@view');
Route::post('/add-film', 'App\Http\Controllers\FilmController@create');
Route::post('/add-zanr', 'App\Http\Controllers\ZanrController@create');
