<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PatientAppointmentDiagnosis;

class PatientAppointmentDiagnosisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PatientAppointmentDiagnosis::factory()
            ->count(5)
            ->create();
    }
}
