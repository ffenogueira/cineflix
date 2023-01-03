<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('filmes', 'ApiController@getAllFilmes');
Route::get('filmes/{id}', 'ApiController@getFilme');
Route::post('filmes', 'ApiController@createFilme');
Route::put('filmes/{id}', 'ApiController@updateFilme');
Route::delete('filmes/delete/{id}','ApiController@deleteFilme');
Route::put('filmes/favorite/{id}', 'ApiController@favoriteFilme');

Route::get('categoria', 'ApiController@getAllCategoria');
Route::get('idioma', 'ApiController@getAllIdioma');
