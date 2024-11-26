<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'section_name_en', 'section_name_uk', 'section_name_ru'
    ];

    public function updateFields(array $data)
    {
        // Update the model
        return $this->update($data);
    }
}
