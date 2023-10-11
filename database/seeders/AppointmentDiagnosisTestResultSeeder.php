<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppointmentDiagnosisTestResult;

class AppointmentDiagnosisTestResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppointmentDiagnosisTestResult::factory()
            ->count(5)
            ->create();
    }
}
