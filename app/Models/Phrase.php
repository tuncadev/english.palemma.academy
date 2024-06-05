<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id', 'section_id', 'phrase_en', 'phrase_uk', 'phrase_ru'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
