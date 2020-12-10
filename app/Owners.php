<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    protected $table = 'owners';

    protected $fillable = [
        'name',
        'last_name',
        'address',
        'telephone',
        'email',        
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}