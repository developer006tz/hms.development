<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DoctorAppointmentPayment;

class DoctorAppointmentPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DoctorAppointmentPayment::factory()
            ->count(5)
            ->create();
    }
}
