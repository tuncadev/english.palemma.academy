<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class Course extends Model
{
  use HasFactory;

    protected $fillable = [
       'price', 'course_name_en', 'course_name_ru', 'course_name_uk', 'course_description_en', 'course_description_ru', 'course_description_uk', 'active'
    ];

  public function sections()
  {
      return $this->hasMany(Section::class);
  }
  public function subscriptions()
  {
      return $this->hasMany(Subscribtion::class);
  }
  public function updateFields(array $data)
    {
        // Update the model
        return $this->update($data);
    }

}

