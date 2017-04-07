<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group.
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


//Restaurants routes
Route::get('/restaurants', 'RestaurantController@index');
Route::post('/restaurants', 'RestaurantController@create');

//Restaurants singular routes
Route::get('/restaurants/{id}', 'RestaurantController@show');
Route::put('/restaurants/{id}', 'RestaurantController@update');
Route::delete('/restaurants/{id}', 'RestaurantController@destroy');

//Bars routes
Route::get('/bars', 'BarController@index');
Route::post('/bars', 'BarController@create');

//Bars singular routes
Route::get('/bars/{id}', 'BarController@show');
Route::put('/bars/{id}', 'BarController@update');
Route::delete('/bars/{id}', 'BarController@destroy');

//HTML/Home Page

Route::get('/', function () {
  return view('home');
});
