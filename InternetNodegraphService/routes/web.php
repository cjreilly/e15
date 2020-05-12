<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PathController@index');
Route::get('/p/{path}', 'PathController@reuse');
Route::get('/path/create', 'PathController@create');
Route::post('/path/create', 'PathController@create');
Route::get('/path/destroy', 'PathController@destroy');
Route::post('/path/destroy', 'PathController@destroy');
Route::get('/path/reuse', 'PathController@reuse');
Route::get('/path/save/{id}', 'PathController@save');
Route::get('/path/r/{id}', 'PathController@reuseInline');

Route::get('/debug/algo', 'PathController@showAlgo');
Route::get('/debug/client', 'PathController@showClient');
Route::get('/i/{option}', 'PathController@index');


Auth::routes();

Route::get('/{path}', 'PathController@reuse');
