<?php

namespace Database\Seeders;

use App\Models\Party;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $party = Party::create([
            'name' => 'buyer',
            'status' => true
        ]);
        $party = Party::create([
            'name' => 'sub-contract',
            'status' => true
        ]);
        $party = Party::create([
            'name' => 'buyer/subcontract',
            'status' => true
        ]);
       

    }
}
