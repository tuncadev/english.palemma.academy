<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    use HasFactory;

    protected $fillable = [
        'visitor_id', 'user_id', 'url',
        'referrer_url', 'device', 'browser', 'os'
    ];

    // Relationships
    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
