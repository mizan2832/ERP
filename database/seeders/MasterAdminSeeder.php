<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasterAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'master-admin',
            'email' => 'masteradmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),

        ]);
        $user->assignRole('writer','master-admin');
    }
}
