<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Path extends Model
{
    //
    protected $table = 'path';
    protected $primaryKey = 'tag';
    protected $keyType = 'string';
    public $incrementing = false;
    protected $attributes = [
        'path' => '',
        'query' => '',
        'port' => '80',
        'destroy_on' => '',
    ];
    protected $timestamps = false;
}
