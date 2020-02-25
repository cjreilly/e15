<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * GET /books
     */
    public function index()
    {
        return 'Here are all the books...';
    }

    /**
     * GET /book/{title}
     */
    public function show($title)
    {
        # Query the database for a book where the title = $title
        # Return a view to show the book
        # Include the book data
        return 'Here are the details for the book: '.$title;
    }

    /**
     * GET /filter/{$category}/{subcategory?}
     */
    public function filter($category, $subcategory = null)
    {
        $output = 'Here are all the books under the category '.$category;

        if ($subcategory) {
            $output .= ' and also the subcategory '.$subcategory;
        }

        return $output;
    }
}
