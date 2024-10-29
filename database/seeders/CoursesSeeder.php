<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'active' => 1,
                'course_name_en' => 'Phrasal Verbs',
                'course_name_ru' => 'Фразовые глаголы',
                'course_name_uk' => 'Фразові дієслова',
                'course_description_uk' => 'Для тих, хто ніколи вивчав англійську і все забув і хоче освіжити знання',
                'course_description_ru' => 'Для тех, кто никогда изучал английский и все позабыл и хочет освежить знания',
                'course_price' => 1000,
                'created_at' => now(),
            ],
        ]);

        DB::table('courses')->insert([
            [
                'active' => 0,
                'course_name_en' => 'Irregular verbs',
                'course_name_ru' => 'Неправильные глаголы',
                'course_name_uk' => 'Неправильні дієслова',
                'course_description_uk' => 'Для тих, хто ніколи вивчав англійську і все забув і хоче освіжити знання',
                'course_description_ru' => 'Для тех, кто никогда изучал английский и все позабыл и хочет освежить знания',
                'created_at' => now(),
            ],
        ]);
    }
}
