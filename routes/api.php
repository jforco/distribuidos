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



    Route::post('/register', 'Auth\RegisterController@register');
	Route::post('/login', 'Auth\LoginController@login');

Route::group(['middleware' => 'auth:api'], function() {
	Route::post('/logout', 'Auth\LoginController@logout');
	Route::put('/user/update/{userid}', 'Auth\RegisterController@update');
});


//para el anuncio
Route::get('/anuncio', 'AnuncioController@index');
Route::get('/anuncio/{anuncio}', 'AnuncioController@show');
Route::post('/anuncio', 'AnuncioController@store');
Route::put('/anuncio/{anuncio}', 'AnuncioController@update');
