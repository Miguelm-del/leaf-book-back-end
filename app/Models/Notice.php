<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'title',
        'content'
    ];

    protected $dates = ['created_at', 'updated_at'];


}
