<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $table = 'deals';
    protected $fillable = [
        'domain_id',
        'page_id',
        'slug',
        'title',
        'discount',
        'discount_type',
        'description',
        'discount_tag',
        'image',
        'dealurl',
        'status',
        'expiry',
        'created_at',
    ];
}
