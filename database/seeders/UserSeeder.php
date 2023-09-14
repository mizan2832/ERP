<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'user_id' => 'mizanur',
            'name' => 'Mizanur Rahman',
            'email' => 'mrahman5037@gmail.com',
            'password' => Hash::make('password'),
            'designation_id' => 1,
            'department_id' => 2,
            'role_level' => 1,
            'unit_id' => 1,
            'buyer_id' => 1,
            'data_access_level' => 1,
            'status' => true
        ]);

       
    }
}
