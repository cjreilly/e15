<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public static function findBySlug($slug)
    {
        return self::where('slug', '=', $slug)->first();
    }

    public function reverseTitle() 
    {
        $this->title = strrev($this->title);
        return $this->title;
    }
}
