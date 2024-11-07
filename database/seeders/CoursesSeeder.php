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
                'course_description_uk' => 'Фразові дієслова - це одна з найцікавіших і найважливіших частин англійської мови.',
                'course_description_ru' => 'Фразовые глаголы – это одна из самых интересных и важнейших частей английского языка.',
                'course_price' => 2600,
                'course_discount' => 40,
                'created_at' => now(),
            ],
        ]);

        DB::table('courses')->insert([
            [
                'active' => 0,
                'course_name_en' => 'Phrasebook: Listen and Talk',
                'course_name_ru' => 'Разговорник: Listen and Talk',
                'course_name_uk' => 'Розмовник: Listen and Talk',
                'course_description_uk' => 'вскоре',
                'course_description_ru' => 'скоро',
                'created_at' => now(),
            ],
        ]);
    }
}
