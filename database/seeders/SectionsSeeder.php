<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Leisure',
            'section_name_uk' => 'дозвілля, відпочинок',
            'section_name_ru' => 'досуг, отдых',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Everyday life',
            'section_name_uk' => 'повсякденне життя',
            'section_name_ru' => 'повседневная жизнь',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Communication',
            'section_name_uk' => 'спілкування, комунікація',
            'section_name_ru' => 'общение, комуникация',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Relationship',
            'section_name_uk' => 'Відносини',
            'section_name_ru' => 'отношения',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Emotions',
            'section_name_uk' => 'Емоції',
            'section_name_ru' => 'эмоции',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Travelling',
            'section_name_uk' => 'Подорожі',
            'section_name_ru' => 'путешествия',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Health',
            'section_name_uk' => 'Здоров`я',
            'section_name_ru' => 'здоровье',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Incident',
            'section_name_uk' => 'Випадок, подія',
            'section_name_ru' => 'Происшествие, событие',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Education',
            'section_name_uk' => 'Освіта',
            'section_name_ru' => 'Образование',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Skills',
            'section_name_uk' => 'Навички',
            'section_name_ru' => 'Навыки',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Work',
            'section_name_uk' => 'Робота',
            'section_name_ru' => 'Работа',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Decision',
            'section_name_uk' => 'Рішення',
            'section_name_ru' => 'Решение',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Event',
            'section_name_uk' => 'Подія',
            'section_name_ru' => 'Событие',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Business',
            'section_name_uk' => 'Бізнес',
            'section_name_ru' => 'Бизнес',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Technology',
            'section_name_uk' => 'Технології',
            'section_name_ru' => 'Технологии',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Time',
            'section_name_uk' => 'Час',
            'section_name_ru' => 'Время',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Money',
            'section_name_uk' => 'Гроші',
            'section_name_ru' => 'Деньги',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Controversy',
            'section_name_uk' => 'Спір, розбіжності',
            'section_name_ru' => 'Спор, разногласие',
            'created_at' => now(),
        ],
      ]);
 DB::table('sections')->insert([
        [
            'course_id' => 1,
            'section_name_en' => 'Conflict',
            'section_name_uk' => 'Конфлікт',
            'section_name_ru' => 'Конфликт',
            'created_at' => now(),
        ],
      ]);
    }
}
