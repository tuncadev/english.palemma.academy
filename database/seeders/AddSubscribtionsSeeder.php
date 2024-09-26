<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AddSubscribtionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $currentDate = Carbon::now();
        $plusOneYear = (clone $currentDate)->addYear();
        $minusOneYear = (clone $currentDate)->subYear();
        $minusOneMonth = (clone $currentDate)->subMonth();

        DB::table('subscribtions')->insert([
            [
                'user_id' => 1,
                'course_id' => 1,
                'payment_status' => 'completed',
                'subscription_date' =>  now(),
                'expiry_date' => $plusOneYear,
                'created_at' => now(),
            ],
            [
                'user_id' => 2,
                'course_id' => 1,
                'payment_status' => 'completed',
                'subscription_date' =>  now(),
                'expiry_date' => $plusOneYear,
                'created_at' => now(),
            ],
        ]);
    }
}
