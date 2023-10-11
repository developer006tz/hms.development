<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicineInvoice;

class MedicineInvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicineInvoice::factory()
            ->count(5)
            ->create();
    }
}
