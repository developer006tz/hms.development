<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppointmentDiagnosisTest;

class AppointmentDiagnosisTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppointmentDiagnosisTest::factory()
            ->count(5)
            ->create();
    }
}
