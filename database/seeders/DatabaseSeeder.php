<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(AdminSeeder::class);
        // $this->call(MasterAdminSeeder::class);
        // $this->call(PartySeeder::class);
        // $this->call(CountrySeeder::class);
        // $this->call(MerchandiserGroupSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(UomSeeder::class);
    }
}
