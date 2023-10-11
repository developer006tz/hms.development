<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppointmentDoctorInvoice;

class AppointmentDoctorInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppointmentDoctorInvoice::factory()
            ->count(5)
            ->create();
    }
}
