<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Section2QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quiz')->insert([
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'You must _ your safety belt in the back of a car.',
                'correct_answer' => 'do up',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'The milk _ because I forgot to put it in the fridge.',
                'correct_answer' => 'went off',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'I _ for my studies every semester.',
                'correct_answer' => 'pay for',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'Try to _ at least 20 min a day to read a book.',
                'correct_answer' => 'put aside',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'Someone’s _ all the milk.',
                'correct_answer' => 'used up',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => '_ by and pick up that book.',
                'correct_answer' => 'drop by',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'I’m _ for my keys.',
                'correct_answer' => 'looking for',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'There aren’t enough chairs to _.',
                'correct_answer' => 'go around',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'Now, please _ your chairs and sweep the floor.',
                'correct_answer' => 'fold up',
                'created_at' => now(),
            ],
            [
                'course_id' => 1,
                'section_id' => 2,
                'question' => 'Nick loves _ old cars.',
                'correct_answer' => 'fixing up',
                'created_at' => now(),
            ]
        ]);
    }
}
