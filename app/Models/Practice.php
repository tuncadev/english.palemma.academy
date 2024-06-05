<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    protected $table = 'practice';
    protected $fillable = [
        'question', 'answers', 'correct_answer'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
