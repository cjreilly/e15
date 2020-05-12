<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    # disable the timestamp property
    public $timestamps = false;

    public function user()
    {
        return $this->morphedToMany('App\User', 'path_user');
#                ->withTimestamps()
#                ->withPivot('path_user');
    }
}
