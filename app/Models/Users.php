<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'Users';
    protected $fillable = [
        'id',
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'role'
    ];
}
