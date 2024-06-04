<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscribtionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscribtions')->insert([
            [
                'user_id' => 1,
                'course_id' => 1,
                'payment_status' => 'completed',
                'subscription_date' => now(),
                'expiry_date' => now()->addYear(),
                'created_at' => now(),

            ],
            [
                'user_id' => 2,
                'course_id' => 1,
                'payment_status' => 'completed',
                'subscription_date' => now(),
                'expiry_date' => now()->addYear(),
                'created_at' => now(),

            ],
            [
                'user_id' => 3,
                'course_id' => 1,
                'payment_status' => 'completed',
                'subscription_date' => now(),
                'expiry_date' => now()->addYear(),
                'created_at' => now(),

            ],
            // Add more seed data as needed
        ]);
    }
}
