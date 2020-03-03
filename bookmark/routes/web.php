<?php

# Example route used to demonstrate error pages
Route::get('/example', function () {
    $foo = [1,2,3];

    # dump, die
    //dd($foo);

    # dump, die, debug
    //ddd($foo);

    Log::info($foo);

    return view('abc');
});

# Homepage
Route::get('/', 'PageController@welcome');

# Books
Route::get('/books', 'BookController@index');
Route::get('/books/{title?}', 'BookController@show');
Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');
