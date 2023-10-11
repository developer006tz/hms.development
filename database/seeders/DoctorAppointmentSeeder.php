<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DoctorAppointment;

class DoctorAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DoctorAppointment::factory()
            ->count(5)
            ->create();
    }
}
