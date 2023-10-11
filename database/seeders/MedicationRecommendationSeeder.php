<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicationRecommendation;

class MedicationRecommendationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicationRecommendation::factory()
            ->count(5)
            ->create();
    }
}
