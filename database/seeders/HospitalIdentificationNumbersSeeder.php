<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HospitalIdentificationNumbers;

class HospitalIdentificationNumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HospitalIdentificationNumbers::factory()
            ->count(5)
            ->create();
    }
}
