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
Route::get('/autors/{autor}', 'AutorController@show')->name('autors.show');
Route::post('/autors', 'AutorController@store')->name('autors.store');
Route::put('/autors/{autor}', 'AutorController@update')->name('autors.update');
Route::delete('autors/{autor}', 'AutorController@destroy')->name('autors.destroy');
