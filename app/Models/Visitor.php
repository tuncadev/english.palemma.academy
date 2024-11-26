<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = ['visitor_token', 'ip_address', 'user_agent'];

    // Relationships
    public function pageViews()
    {
        return $this->hasMany(PageView::class);
    }

    public function pageVisitCounts()
    {
        return $this->hasMany(PageVisitCount::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($visitor) {
            // Delete related PageViews and PageVisitCounts
            $visitor->pageViews()->delete();
            $visitor->pageVisitCounts()->delete();
        });
    }
}
