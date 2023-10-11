<?php

namespace Database\Seeders;

use App\Models\MedicationBill;
use Illuminate\Database\Seeder;

class MedicationBillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicationBill::factory()
            ->count(5)
            ->create();
    }
}
