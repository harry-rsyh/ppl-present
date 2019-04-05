<?php

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

Route::get('/','FrontController@trending')->name('trending');
Route::get('/makanan','FrontController@makanan')->name('makanan');
Route::get('/minuman','FrontController@minuman')->name('minuman');
Route::get('/dessert','FrontController@dessert')->name('dessert');
Route::get('/my-pesanan','FrontController@mypesanan')->name('mypesanan');