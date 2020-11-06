<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    //convert an array into a json object to store in the DB
    protected $casts = [
        'tags' => 'array'
    ];

    protected $guarded = [];
}
