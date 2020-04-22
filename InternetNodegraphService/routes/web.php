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
Route::get('/{id}', 'PathController@reuse');
Route::get('/path/create', 'PathController@create');
Route::post('/path/create', 'PathController@create');
Route::get('/path/destroy', 'PathController@destroy');
Route::get('/path/reuse', 'PathController@reuse');
Route::get('/path/reuse?path={id}', 'PathController@reuse');

Route::get('/debug/algo', 'PathController@showAlgo');
Route::get('/i/{option}', 'PathController@index');

