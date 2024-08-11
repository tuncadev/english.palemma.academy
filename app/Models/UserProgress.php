<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProgress extends Model
{
    use HasFactory;

    protected $table = 'user_progress';

    // Allow mass assignment for the following fields
    protected $fillable = [
        'user_id',
        'course_id',
        'section_id',
        'phrase_id',
        'practice_id',
        'quiz_id',
        'checkbox_state',
        'input_value',
        'dropdown_value',
    ];

    // Relationships (if needed)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function phrase()
    {
        return $this->belongsTo(Phrase::class);
    }
}
