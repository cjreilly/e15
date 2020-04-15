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

Route::get('/', function () {
    return view('path.index');
    return '<html><head><title>Request by Proxy</title></head><body><p>The Internet Nodegraph Service is
    <i>here</i>.</p></body></html>';
});
Route::get('/debug/path', 'PathController@index');
Route::get('/path/create', 'PathController@create');
Route::get('/path/destroy', 'PathController@destroy');
Route::get('/path/reuse', 'PathController@reuse');
Route::get('/debug/algo', 'PathController@showAlgo');
Route::get('/debug', function() {
});
