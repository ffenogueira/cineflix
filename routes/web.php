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

Route::get('/', 'ApiController@getAllFilmes');
Route::get('/home', 'ApiController@getAllFilmes');
Route::get('/cadastrar', 'CineflixController@create');
Route::post('home', 'ApiController@createFilme')->name('create.filme');