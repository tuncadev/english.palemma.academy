<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Section2PracticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('practice')->insert([
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'She opened the door and _ me _.',
                'answers' => '["let in", "call in", "rub in"]',
                'correct_answer' => 'let in',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'Don’t leave them on your desk and let them _.',
                'answers' => '["pile up", "nod off", "double up"]',
                'correct_answer' => 'pile up',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'The shirt really _ his new tie.',
                'answers' => '["showed off", "looked for", "reached out"]',
                'correct_answer' => 'showed off',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'My boots are _ at the seams.',
                'answers' => '["coming apart", "dropping by", "using up"]',
                'correct_answer' => 'coming apart',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'When we arrived, her boyfriend _ drinks.',
                'answers' => '["poured out", "lined up", "put aside"]',
                'correct_answer' => 'poured out',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'He _ his jacket.',
                'answers' => '["zipped up", "fixed up", "paid for"]',
                'correct_answer' => 'zipped up',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'They managed to _ 47 samples of different ages.',
                'answers' => '["dig out", "double up", "throw out"]',
                'correct_answer' => 'dig out',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'After our busy day, we both sat and _ in front of the TV.',
                'answers' => '["nodded off", "joined in", "turned down"]',
                'correct_answer' => 'nodded off',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'I’m just starting to _ after taking the dogs out this morning.',
                'answers' => '["throw out", "throw away", "come back"]',
                'correct_answer' => 'throw out',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'I _ the dust from my shoes every day.',
                'answers' => '["brush off", "clean up", "rub in"]',
                'correct_answer' => 'brush off',
                'created_at' => now(),
            ]
        ]);
    }
}
