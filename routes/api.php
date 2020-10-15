<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/autors', 'AutorController@index')->name('autors.index');
Route::post('/autors', 'AutorController@store')->name('autors.store');

Route::get('/autors/{id}', 'AutorController@show')->name('autors.show');
Route::put('/autors/{id}', 'AutorController@update')->name('autors.update');
Route::delete('autors/{id}', 'AutorController@destroy')->name('autors.destroy');

Route::get('/articulos', 'ArticuloController@index')->name('articulos.index');
Route::post('/articulos', 'ArticuloController@store')->name('articulos.store');

Route::get('/articulos/{id}', 'ArticuloController@show')->name('articulos.show');
Route::put('/articulos/{id}', 'ArticuloController@update')->name('articulos.update');
Route::delete('articulos/{id}', 'ArticuloController@destroy')->name('articulos.destroy');

Route::get('/autors/{id}/articulos', 'AutorController@getAutorArticulo')->name('autors.articulos');
