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
})->name('login');;
Route::get('/create','App\Http\Controllers\BodyTempeatureController@create');
Route::post('/post','App\Http\Controllers\BodyTempeatureController@post');
Route::get('/index','App\Http\Controllers\BodyTempeatureController@index')->middleware('auth');
