<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name'=>'Accessories'],
            ['name'=>'Chemicals'],
            ['name'=>'Cleaning Goods'],
            ['name'=>'Auxilary Chemicals'],
            ['name'=>'Comber'],
            ['name'=>'Compressor Machinery'],
            ['name'=>'Crockeries'],
            ['name'=>'Cutting Machinery'],
            ['name'=>'Dyes'],
            ['name'=>'Dyes Chemicals'],
            ['name'=>'Electrical'],
            ['name'=>'Embroidery Machinery'],
            ['name'=>'ETP'],
            ['name'=>'Finishing Materials'],
            ['name'=>'Finishing Machinery'],
            ['name'=>'Fan'],
            ['name'=>'Fuel & Lubricates'],
            ['name'=>'ICT Equipment'],
            ['name'=>'IT & Communications'],
            ['name'=>'Labroratory Machinery'],
            ['name'=>'Maintenance'],
            ['name'=>'Medical'],
            ['name'=>'Needles'],
            ['name'=>'Office Equipment'],
            ['name'=>'Office Maintenance'],
            ['name'=>'Other Accessories'],
            ['name'=>'Others'],
            ['name'=>'Stationeries'],
            ['name'=>'Vehicle'],

        ];

        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
