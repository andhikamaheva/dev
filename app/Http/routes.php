<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::post('/kepribadian', 'KepribadianController@show');
//Route::resource('kepribadian', 'KepribadianController');
Route::resource('/', 'KepribadianController');
Route::post('/kepribadian', 'KepribadianController@show');
Route::get('/kepribadian',  'KepribadianController@index');

Route::get('api/pertanyaan', 'KepribadianController@apiPertanyaan');
Route::get('api/jawaban', 'KepribadianController@apiJawaban');
