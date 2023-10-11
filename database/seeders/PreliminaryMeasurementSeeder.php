<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PreliminaryMeasurement;

class PreliminaryMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PreliminaryMeasurement::factory()
            ->count(5)
            ->create();
    }
}
