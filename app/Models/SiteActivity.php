<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_id',
        'first_visit',
        'last_visit',
        'pages_visited',
    ];

    protected $casts = [
        'pages_visited' => 'array',  // Automatically convert to/from JSON
    ];
}
