<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call([
            AdminUserSeeder::class,
            CoursesSeeder::class,
            SectionsSeeder::class,
            PhraseSeeder::class,
            VideosSeeder::class,
            AddPracticeQuestions::class,
            AddQuizQuestion::class,
            AddSubscribtionsSeeder::class,
            // Add other seeders here
        ]);
    }

}
