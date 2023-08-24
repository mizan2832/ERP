<?php

namespace Database\Seeders;

use App\Models\Uom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uoms = [
            ['name'=>'Pcs'],
            ['name'=>'Mm'],
            ['name'=>'Dzn'],
            ['name'=>'Box'],
            ['name'=>'Pkt'],
            ['name'=>'Book'],
            ['name'=>'Mg'],
            ['name'=>'Mm'],
            ['name'=>'Gm'],
            ['name'=>'Kg'],
            ['name'=>'Km'],
            ['name'=>'CM'],
            ['name'=>'YDS'],
            ['name'=>'Lbs'],
            ['name'=>'Lot'],
            ['name'=>'Ton'],
            ['name'=>'Gallon'],
            ['name'=>'Quintal'],
            ['name'=>'Mtr'],
            ['name'=>'Grs'],
            ['name'=>'Mg'],
            ['name'=>'Dcm'],

        ];
        
        foreach ($uoms as $key => $value) {
            Uom::create($value);
        }

    }
}
