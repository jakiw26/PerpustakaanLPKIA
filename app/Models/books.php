<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'id',
        'category_id',
        'author_id',
        'publisher_id',
        'title',
        'isbn',
        'year',
        'stock',
        'description'
    ];
}
