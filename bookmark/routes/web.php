<?php

Route::get('/example', function () {
    return view('abc');
});


Route::get('/', 'PageController@welcome');

Route::get('/books', 'BookController@index');
Route::get('/books/{title?}', 'BookController@show');
Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');
