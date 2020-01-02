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
//Route::resource('fileupload', 'FiletimeController');
Route::get('list', 'TheseController@index');

Route::get('theses/{these}', 'TheseController@show');

Route::post('add','TheseController@store');

Route::put('theses/{these}','TheseController@update');

Route::delete('theses/{these}', 'TheseController@delete');
