<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phrase extends Model
{
    use HasFactory;

    protected $fillable = [
        'phrase_en', 'phrase_ru', 'phrase_uk'
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
