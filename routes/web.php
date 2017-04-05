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

use Illuminate\Http\Request;

//Musicals routes
Route::get('/musicals', 'MusicalController@index');
Route::post('/musicals', 'MusicalController@create');

//Musicals singular routes
Route::get('/musicals/{id}', 'MusicalController@show');
Route::put('/musicals/{id}', 'MusicalController@update');
Route::delete('/musicals/{id}', 'MusicalController@destroy');

//HTML/View Responses

Route::get('/', function () {
  return view('home');
});
