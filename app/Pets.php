<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    protected $table = 'pets';

    protected $fillable = [
        'owner_id',
        'vet_id',
        'species_id',
        'name',
        'age',
        'weight',
        'gender',
        'colour',
        'image'
    ];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}