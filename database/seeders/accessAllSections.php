<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class accessAllSections extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i<=19; $i++){
            DB::table('completed_sections')->insert([
                [
                    'user_id' => 1,
                    'course_id' => 1,
                    'section_id' => $i,
                    'created_at' => now(),
                ],
            ]);
        }
        for ($s = 1; $s<=19; $s++){
            DB::table('completed_sections')->insert([
                [
                    'user_id' => 2,
                    'course_id' => 1,
                    'section_id' => $s,
                    'created_at' => now(),
                ],
            ]);
        }
    }
}
