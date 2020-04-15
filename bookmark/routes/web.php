<?php

/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');
Route::any('/example/{n?}', 'ExampleController@index');


/**
 * Miscellaneous mostly-static pages
 */
Route::get('/', 'PageController@welcome');
Route::get('/support', 'PageController@support');


/**
 * Books
 */
# Create a book
Route::get('/books/create', 'BookController@create');
Route::post('/books', 'BookController@store');

# Update a book
Route::get('/books/{slug}/edit', 'BookController@edit');
Route::put('/books/{slug}', 'BookController@update');
Route::post('/books/{slug}/remove', 'BookController@remove');

# Show all books
Route::get('/books', 'BookController@index');

# Show a book
Route::get('/books/{slug?}', 'BookController@show');

# Misc
Route::get('/search', 'BookController@search');
Route::get('/list', 'BookController@list');

# This was an example route to show multiple parameters;
# Not a feature we're actually building, so I'm commenting out
# Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');

Route::get('/debug', function() {
    $debug = [
        'Environment' => App::environment(),
    ];

    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database conncetion test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});
