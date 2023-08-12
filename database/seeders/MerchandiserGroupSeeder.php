<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MerchandiserGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MerchandiserGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [

            ['name' => 'Woven RFL-1'],
            ['name' => 'Woven RFL-2'],
            ['name' => 'Woven RFL-3'],
            ['name' => 'Woven RFL-4'],

        ];

        foreach ($groups as $key => $value) {
            MerchandiserGroup::create($value);
        }
    }
}
