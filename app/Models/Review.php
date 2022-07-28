<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'user_id',
        'name',
        'title_book',
        'writer',
        'review',
        'available'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function user () {
        return $this->belongsTo(User::class);
    }
}
