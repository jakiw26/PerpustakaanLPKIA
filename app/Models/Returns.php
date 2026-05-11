<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Returns extends Model
{
    protected $table = 'returns';
    protected $fillable = [
        'id',
        'borrowing_id',
        'return_date',
        'late_days',
    ];
}
