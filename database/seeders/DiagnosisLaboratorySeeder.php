<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DiagnosisLaboratory;

class DiagnosisLaboratorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DiagnosisLaboratory::factory()
            ->count(5)
            ->create();
    }
}
