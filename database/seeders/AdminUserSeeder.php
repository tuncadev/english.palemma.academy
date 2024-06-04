<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Emma',
            'email' => 'emma@palemma.academy',
            'password' => Hash::make('Z8Er!YN4@pE#5Dq&P'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Ozzy',
            'email' => 'tunca.development@gmail.com',
            'password' => Hash::make('Kf06091991'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Subscriber',
            'email' => 'info@palemma.academy',
            'password' => Hash::make('omt183200**'),
            'role' => 'subscriber',
        ]);
    }
}
