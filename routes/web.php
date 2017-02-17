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

Route::name('pins.favourite')->get('/pins/{pin}/favourite', 'PinsController@favourite');
Route::name('pins.upvote')->get('/pins/{pin}/upvote', "PinsController@upvote");
Route::name('pins.downvote')->get('/pins/{pin}/downvote', 'PinsController@downvote');
Route::get('/', 'PinsController@index');
Route::resource('pins', 'PinsController');
Auth::routes();
Route::get('/home', 'PinsController@index');
