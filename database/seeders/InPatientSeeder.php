<?php

namespace Database\Seeders;

use App\Models\InPatient;
use Illuminate\Database\Seeder;

class InPatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InPatient::factory()
            ->count(5)
            ->create();
    }
}
