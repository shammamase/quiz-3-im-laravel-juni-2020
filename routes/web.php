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


/*
Route::get('/', function () {
    return view('layouts.master');
});
*/
Route::get('/', 'ArtikelController@home');
Route::get('/artikel', 'ArtikelController@artikel'); // show all
Route::get('/artikel/create', 'ArtikelController@create'); // form create
Route::post('/artikels', 'ArtikelController@save_artikel'); // proses save