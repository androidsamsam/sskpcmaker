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
//商品絞り込み検索
Route::post('/pcpc','App\Http\Controllers\PcmakerController@pcshowList')->name('pcbrandshow');
Route::get('/','App\Http\Controllers\PcmakerController@pcallshowList')->name('pcall');
//メモ詳細表示
Route::get('/pcpc/{id}', 'App\Http\Controllers\PcmakerController@memoshowList')->name('memoshow');
