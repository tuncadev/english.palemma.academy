<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            [
                'course_id' => 1,
                'video_order' => 1,
                'video_name_en' => 'What is "Phrasal Verbs"',
                'video_name_uk' => 'Пояснення',
                'video_name_ru' => 'Объяснения',
                'video_short_description_uk' => 'Що таке фразові дієслова',
                'video_short_description_ru' => 'Что такое фразовые глаголы',
            ],
          ]);
          DB::table('videos')->insert([
            [
                'course_id' => 1,
                'video_order' => 2,
                'video_name_en' => 'Phrasal Verb - Structures',
                'video_name_uk' => 'Конструкції фразових дієслів - Перший тип.',
                'video_name_ru' => 'Конструкции фразовых глаголов - Первый тип',
                'video_short_description_uk' => 'Дієслово + прислівник',
                'video_short_description_ru' => 'Глагол + наречие',

            ],
          ]);
          DB::table('videos')->insert([
            [
                'course_id' => 1,
                'video_order' => 3,
                'video_name_en' => 'Phrasal Verb - Structures',
                'video_name_uk' => 'Конструкції фразових дієслів - Другий тип',
                'video_name_ru' => 'Конструкции фразовых глаголов - Второй тип',
                'video_short_description_uk' => 'Дієслово + наречие + об\'єкт',
                'video_short_description_ru' => 'Глагол + наречие + объект',

            ],
          ]);
          DB::table('videos')->insert([
            [
                'course_id' => 1,
                'video_order' => 4,
                'video_name_en' => 'Phrasal Verb - Structures',
                'video_name_uk' => 'Конструкції фразових дієслів - Третій тип',
                'video_name_ru' => 'Конструкции фразовых глаголов - Третий тип',
                'video_short_description_uk' => 'Дієслово + об\'єкт + прислівник',
                'video_short_description_ru' => 'Глагол + объект + наречие',

            ],
          ]);
          DB::table('videos')->insert([
            [
                'course_id' => 1,
                'video_order' => 5,
                'video_name_en' => 'Phrasal Verb - Structures',
                'video_name_uk' => 'Конструкції фразових дієслів - Четвертий тип',
                'video_name_ru' => 'Конструкции фразовых глаголов - Четвертый тип',
                'video_short_description_uk' => 'Дієслово + прийменник + об\'єкт',
                'video_short_description_ru' => 'Глагол + предлог + объект',

            ],
          ]);
          DB::table('videos')->insert([
            [
                'course_id' => 1,
                'video_order' => 6,
                'video_name_en' => 'Phrasal Verb - Structures',
                'video_name_uk' => 'Конструкції фразових дієслів - П\'ятий тип',
                'video_name_ru' => 'Конструкции фразовых глаголов - Пятый тип',
                'video_short_description_uk' => 'Дієслово + прислівник + прийменник + об\'єкт',
                'video_short_description_ru' => 'Глагол + наречие + предлог + объект',

            ],
          ]);
          DB::table('videos')->insert([
            [
                'course_id' => 1,
                'video_order' => 7,
                'video_name_en' => 'Phrasal Verb - Structures',
                'video_name_uk' => 'Конструкції фразових дієслів - П\'ятий тип',
                'video_name_ru' => 'Конструкции фразовых глаголов - Пятый тип',
                'video_short_description_uk' => 'Дієслово + прислівник + прийменник + об\'єкт',
                'video_short_description_ru' => 'Глагол + наречие + предлог + объект',

            ],
          ]);
    }

}
