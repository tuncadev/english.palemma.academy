<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quiz';
    protected $fillable = [
        'question', 'correct_answer'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
