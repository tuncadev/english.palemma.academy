<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageVisitCount extends Model
{
    use HasFactory;

    protected $fillable = ['visitor_id', 'url', 'visit_count', 'last_visited_at'];

    // Relationships
    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
