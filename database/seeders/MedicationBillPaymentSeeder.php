<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicationBillPayment;

class MedicationBillPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicationBillPayment::factory()
            ->count(5)
            ->create();
    }
}
