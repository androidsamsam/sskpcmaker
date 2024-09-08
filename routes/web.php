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

Route::post('/pcpc','app\Http\Controllers\PcmakerController@pcshowList')->name('pcbrandshow');
Route::get('/','app\Http\Controllers\PcmakerController@pcallshowList')->name('pcall');

