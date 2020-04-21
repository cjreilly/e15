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
Route::group(['middleware' => 'auth'], function () {
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

    # DELETE
    # Show the page to confirm deletion of a book
    Route::get('/books/{slug}/delete', 'BookController@delete');

    # Process the deletion of a book
    Route::delete('/books/{slug}', 'BookController@destroy');

    # List
    Route::get('/list', 'ListController@show');
    
    Route::get('/list/{slug?}/add', 'ListController@add');
    Route::post('/list/{slug?}/add', 'ListController@save');


    # Misc
    Route::get('/search', 'BookController@search');
});



# This was an example route to show multiple parameters;
# Not a feature we're actually building, so I'm commenting out
# Route::get('/filter/{category}/{subcategory?}', 'BookController@filter');

Auth::routes();
