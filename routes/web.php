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

Route::get('/', 'GameController@promo')->name('promo');

Route::get('/game', 'GameController@index')->name('overzicht');
Route::post('/game', 'GameController@search')->name('search');
Route::put('/game','GameController@suggest')->name('suggest');

Route::get('/win/{game}', 'GameController@win')->name('win');
Route::put('/win/','CardsController@store')->name('add_card');

Route::get('/game/{game}', 'GameController@play')->name('play');
Route::get('/new/card/{game}', 'CardsController@randomOne');