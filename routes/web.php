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

Route::get('/', 'GameController@index')->name('overzicht');
Route::post('/zoek', 'GameController@search')->name('search');

Route::get('/game/{game}', 'GameController@play')->name('play');

Route::get('/test', 'GameController@test');



