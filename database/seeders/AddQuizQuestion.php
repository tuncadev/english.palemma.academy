<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddQuizQuestion extends Seeder
{
  public function run(): void
  {
    {
      DB::table('quiz')->insert([
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'Did you _ who took the cookie?',
            'question_uk' => 'Задуй всі свічки на іменинному пирозі.',
            'question_ru' => 'Задуй все свечи на именинном пироге.',
            'correct_answer' => 'find out',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'The concert didn’t _ to my expectations.',
            'correct_answer' => 'live up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'I’m sorry, but I don’t think he will ever _.',
            'correct_answer' => 'settle down',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'I’m cold could you _ the heating _ , please?',
            'correct_answer' => 'turn up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'We\'ll give him a couple hours to _.',
            'correct_answer' => 'cool off',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => '_ my brother while I\'m gone.',
            'correct_answer' => 'look after',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'She thinks you _ the house.',
            'correct_answer' => 'laze about',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'I don’t _ to going out tonight.',
            'correct_answer' => 'feel up',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'Let me see if I can _.',
            'correct_answer' => 'zoom in',
            'created_at' => now(),
        ],
        [
            'course_id' => 1,
            'section_id' => 1,
            'question' => 'They _ a lot of the scenes with her.',
            'correct_answer' => 'cut out',
            'created_at' => now(),
        ]
    ]);
    }
  }
}
