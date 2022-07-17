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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample/{id}', '\App\Http\Controllers\Sample\IndexController@showId');
Route::get('/sample/show', '\App\Http\Controllers\Sample\IndexController@show');
Route::get('/tweet', '\App\Http\Controllers\Tweet\IndexController');

