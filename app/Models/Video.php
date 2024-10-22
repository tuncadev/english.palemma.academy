<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = [
        'video_order', 'video_name_en', 'video_name_uk', 'video_name_ru', 'video_short_description_uk', 'video_short_description_ru'
    ];

    public function section()
    {
        return $this->belongsTo(Course::class);
    }
}
