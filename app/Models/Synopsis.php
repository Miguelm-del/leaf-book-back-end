<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Synopsis extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'book',
        'author',
        'synopsis'
    ];

    protected $dates = ['created_at', 'updated_at'];
}
