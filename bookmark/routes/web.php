<?php

# Example route used to demonstrate error pages
Route::get('/example', function () {
    $foo = [1,2,3];

    # dump, die
    //dd($foo);

    # dump, die, debug
    //ddd($foo);

    Log::info($foo);

    ddd(storage_path('temp'));

    return view('abc');
});

# Misc. Pages
Route::get('/', 'PageController@welcome');
Route::get('/support', 'PageController@support');


# Books
Route::get('/books', 'BookController@index');
Route::get('/books/{slug?}', 'BookController@show');

# This was an example route to show multiple parameters;
# Not a feature we're actually building, so I'm commenting out
# Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');
