<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'detail', 'is_post',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
