<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddPracticeQuestions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            DB::table('practice')->insert([
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => '_ all the candles on the birthday cake.',
                    'question_uk' => 'Задуй всі свічки на іменинному пирозі.',
                    'question_ru' => 'Задуй все свечи на именинном пироге.',
                    'answers' => '["blow out", "try out", "move out"]',
                    'correct_answer' => 'blow out',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'We could just _ in bed all day.',
                    'question_uk' => 'Ми могли просто валятися в ліжку весь день.',
                    'question_ru' => 'Мы могли просто лежать в постели весь день.',
                    'answers' => '["lie around", "move over", "lie down"]',
                    'correct_answer' => 'lie around',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'We want to _ now.',
                    'question_uk' => 'Ми хочемо переїхати зараз.',
                    'question_ru' => 'Мы хотим въехать сейчас.',
                    'answers' => '["move in", "try on", "lock up"]',
                    'correct_answer' => 'move in',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'I can’t wait to _ that plane.',
                    'question_uk' => 'Задуй всі свічки на іменинному пирозі.',
                    'question_ru' => 'Скоріше б сісти на цей літак.',
                    'answers' => '["get on", "turn up", "chill out"]',
                    'correct_answer' => 'get on',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'Not everyone can afford to _ in a hotel there.',
                    'question_uk' => 'Далеко не кожен може дозволити собі зупинку в готелі.',
                    'question_ru' => 'Далеко не каждый может позволить себе остановку в отеле.',
                    'answers' => '["stop over", "pass down", "turn over"]',
                    'correct_answer' => 'stop over',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'Always _ wherever you go.',
                    'question_uk' => 'Одягайся добре куди б ти не пішов.',
                    'question_ru' => 'Одевайся хорошо куда бы ты не пошел.',
                    'answers' => '["dress up", "feel up to", "roll up"]',
                    'correct_answer' => 'dress up',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'The rain continued to _.',
                    'question_uk' => 'Дощ продовжував лити.',
                    'question_ru' => 'Дождь продолжал лить.',
                    'answers' => '["pour down", "shoot off", "stop over"]',
                    'correct_answer' => 'pour down',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'I don’t _ fizzy drinks - I prefer water.',
                    'question_uk' => 'Я не люблю газовані напої - я віддаю перевагу воду.',
                    'question_ru' => 'Я не люблю газированные напитки - я предпочитаю воду.',
                    'answers' => '["care for", "hang out", "watch out for"]',
                    'correct_answer' => 'care for',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'I came to _ you _.',
                    'question_uk' => 'Я приїхав тебе підбадьорити.',
                    'question_ru' => 'Я приехала тебя подбодрить.',
                    'answers' => '["cheer up", "think up", "laze about"]',
                    'correct_answer' => 'cheer up',
                    'created_at' => now(),
                ],
                [
                    'course_id' => 1,
                    'section_id' => 1,
                    'question' => 'Stop _ – this is serious!',
                    'question_uk' => 'Перестань балуватися - це серйозно.',
                    'question_ru' => 'Перестань баловаться - это серьезно.',
                    'answers' => '["fool around", "get on", "brush up"]',
                    'correct_answer' => 'fool around',
                    'created_at' => now(),
                ],
            ]);
        }
    }
}


