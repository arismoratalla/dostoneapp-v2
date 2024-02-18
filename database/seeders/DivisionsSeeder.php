<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Division;

class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            ['name' => 'Office of the Regional Director', 'code' => 'ORD'],
            ['name' => 'Finance and Administrative Support Services', 'code' => 'FASS'],
            ['name' => 'Technical Services', 'code' => 'TS'],
            ['name' => 'Field Operation Services', 'code' => 'FOS', 'active' => false],
            ['name' => 'PSTO-Zamboanga del Sur', 'code' => 'PSTO-ZDS'],
            ['name' => 'PSTO-Zamboanga del Norte', 'code' => 'PSTO-ZDN'],
            ['name' => 'Sibugay', 'code' => 'PSTO-ZS'],
            ['name' => 'CSTC-Zamboanga/Isabela-Basilan', 'code' => 'CSTC-ZC/Isab'],
        ];

        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}
