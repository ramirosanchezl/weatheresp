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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home/{id}', 'HomeController@index');


Route::get('/historic/{id}', 'HistoricController@index');

Route::get('/profile', 'ProfileController@index');

Route::resource('/station', 'StationController')    
    ->middleware('is_admin');

Route::get('/metar', 'MetarController@index');

Route::get('/radar', 'RadarController@index');

Route::resource('/users', 'UserController')    
    ->middleware('is_admin');

Route::get('/alerts','AlertController@show');

Route::get('/radar', 'RadarController@index');

Route::get('/chart', 'ChartController@index');

