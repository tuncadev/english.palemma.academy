<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedSection extends Model
{
    use HasFactory;

    protected $table = 'completed_sections';

    protected $fillable = [
        'user_id',
        'course_id',
        'section_id',
        'created_at',
        'updated_at',
        'score',
        'practice_score',
        'quiz_score',
        'overall_score',
        'highest_practice_score',
        'highest_quiz_score',
        'highest_overall_score',
    ];
}

