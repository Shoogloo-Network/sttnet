<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_id',
        'name',
        'email',
        'title',
        'description',
        'rating',
        'flag',        
        'slug',
        'status',
        'created_at',
        'updated_at',
    ];
}
