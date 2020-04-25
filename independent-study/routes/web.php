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

Route::get('/', 'NoteController@home');
Route::get('/clear-session', 'NoteController@clearSession');
Route::get('/pin/{id}', 'NoteController@pin');
Route::get('/{id}', 'NoteController@filterSection');
Route::get('/data/{source}', 'DataController@jsonData');
