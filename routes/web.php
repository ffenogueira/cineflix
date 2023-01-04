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

Route::get('/', 'CineflixController@index');
Route::get('/home', 'CineflixController@index');
Route::get('/cadastrar', 'CineflixController@create');
Route::post('/cadastrar-store', 'CineflixController@store')->name('cineflix.store');