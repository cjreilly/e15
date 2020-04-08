<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Str;

class ExampleController extends Controller
{
    /**
    * Example: delete all books that contain "Rowling" in the author field
    */
    public function example27()
    {
        $result = Book::where('author', 'LIKE', '%Rowling%')->delete();
        dump($result);
    }
    /**
    * Example: change the author "J.K. Rowling" to "JK Rowling" for all books
    */
    public function example26()
    {
        $result = Book::where('author', '=', 'J.K. Rowling')->update(['author' => 'JK Rowling']);
        dump($result);
    }
    /**
    * Example: retrieve all books ordered in descending order by published year
    */
    public function example25()
    {
        $result = Book::orderBy('published_year', 'DESC')->get();
        dump($result->toArray());
    }
    /**
    * Example: retrieve all books ordered by title
    */
    public function example24()
    {
        $result = Book::orderBy('title')->get();
        dump($result->toArray());
    }
    /**
    * Example: retrieve all books published_year after 1950
    */
    public function example23()
    {
        $result = Book::where('published_year', '>', 1950)->get();
        dump($result->toArray());
    }
    /**
    * Example: retrieve the last two most recently added books
    */
    public function example22()
    {
        $result = Book::orderBy('created_at', 'DESC')->limit(2)->get();
        dump($result->toArray());
    }






    /**
    * Example: delete rows matching the 'where' constraint
    */
    public function example21()
    {
        $result = Book::where('title', '=', 'The Great Gatsby')->delete();
        dump($result);
    }
    /**
    * Example: delete a row by ID
    */
    public function example20()
    {
        $result = Book::destroy(1);
        dump($result);
    }
    /**
    * Example: raw SQL query
    */
    public function example19()
    {
        $result = Book::raw('SELECT * FROM books WHERE title LIKE %Gatsby%')->get();
        dump($result);
    }
    /**
    * Example: determine if a row exists using the 'exist' method
    */
    public function example18()
    {
        $result = Book::where('title', '=', 'The Great Gatsby')->exists()->get();
        dump($result);
    }
    /**
    * Example: get one column value from the first result
    */
    public function example17()
    {
        $result = Book::where('published_year', '>', 1800)->orderBy('published_year')->value('title')->get();
        dump($result);
    }
    /**
    * Example: limit the number of rows returned
    */
    public function example16()
    {
        $result = Book::where('published_year', '>', 1800)->limit(2)->get();
        dump($result->toArray());
    }
    /**
    * Example: count how many rows match a 'where' constraint
    */
    public function example15()
    {
        $result = Book::where('title', 'LIKE', '%Gatsby%')->count();
        dump($result);
    }
    /**
    * Example: throwing an exception if the query fails
    */
    public function example14()
    {
        $result = Book::where('title', '=', 'The Great Gatsbyyyyy')->firstOrFail();
        dump($result->toArray());
    }
    /**
    * Example: using the 'first' method to return only one result
    */
    public function example13()
    {
        $result = Book::where('title', 'LIKE', '%Gatsby%')->orderBy('created_at')->first();
        dump($result);
    }
    /**
    * Example: 'whereIn' constraint
    */
    public function example12()
    {
        $result = Book::whereIn('id', [1,2])->get();
        dump($result->toArray());
    }
    /**
    * Example: 'where' and 'orWhere' constraints
    */
    public function example11()
    {
        $result = Book::where('published_year', '>', '1960')->orWhere('id', '<', 5)->get();
        dump($result->toArray());
    }
    /**
    * Example: 'where' constraint used recursively
    */
    public function example10()
    {
        $result = Book::where('published_year', '>', '1960')->where('id', '<', 5)->get();
        dump($result->toArray());
    }

    /**
    * Example: 'orderBy' constraint used recursively
    */
    public function example9()
    {
        $result = Book::orderBy('published_year')->orderBy('title','desc')->get();
        dump($result->toArray());
    }

    /**
    * Example: a second parameter passed to 'orderBy' constraint
    */
    public function example8()
    {
        $result = Book::orderBy('published_year','desc')->get();
        dump($result->toArray());
    }

    /**
     * Example: get rows with an 'orderBy' constraint
     */
    public function example7()
    {
        $result = Book::orderBy('published_year')->get();
        dump($result->toArray());
    }
    
    /**
     * Example: get rows with a 'where' constraint using exact matching
     */
    public function example6()
    {
        $result = Book::where('title', '=', 'The Great Gatsby')->get();
        dump($result->toArray());
    }

    /**
     * Example: get all rows with a 'where' constraint using fuzzy matching
     */
    public function example5()
    {
        $result = Book::where('title', 'LIKE', '%Gatsby%')->get();
        dump($result->toArray());
    }

    /**
     * Example: throw an exception if lookup fails
     */
    public function example4()
    {
        $result = Book::findOrFail(9999);
        dump($result->toArray());
    }

    /**
     * Example: get a row by ID.
     */
    public function example3()
    {
        $result = Book::find(1);
        dump($result);
    }

    /**
     * Example: dump all books
     */
    public function example2()
    {
        $result = Book::all();
        dump($result->toArray());
    }

    /**
     * Example
     */
    public function example1()
    {
        dump('This is the first example.');
    }

    /**
     * ANY (GET/POST/PUT/DELETE)
     * /example/{n?}
     * This method accepts all requests to /example/ and
     * invokes the appropriate method.
     * http://bookmark.loc/example => Shows a listing of all example routes
     * http://bookmark.loc/example/1 => Invokes example1
     * http://bookmark.loc/example/5 => Invokes example5
     * http://bookmark.loc/example/999 => 404 not found
     */
    public function index($n = null)
    {
        $methods = [];

        # Load the requested `exampleN` method
        if (!is_null($n)) {
            $method = 'example' . $n; # example1

            # Invoke the requested method if it exists; if not, throw a 404 error
            return (method_exists($this, $method)) ? $this->$method() : abort(404);
        } # If no `n` is specified, show index of all available methods
        else {
            # Build an array of all methods in this class that start with `example`
            foreach (get_class_methods($this) as $method) {
                if (strstr($method, 'example')) {
                    $methods[] = $method;
                }
            }

            # Load the view and pass it the array of methods
            return view('example')->with(['methods' => $methods]);
        }
    }
}
