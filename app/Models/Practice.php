<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    protected $table = 'practice';
    protected $fillable = [
      'question', 'question_uk', 'question_ru', 'answers', 'correct_answer'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function updateFields(array $data)
    {
        // Update the model
        return $this->update($data);
    }
}
