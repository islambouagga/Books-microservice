<?php

namespace App;


use App\Traits\ApiResponser;
use Illuminate\Database\Eloquent\Model;


class Book extends Model
{

use  ApiResponser;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'author_id',
    ];

}
