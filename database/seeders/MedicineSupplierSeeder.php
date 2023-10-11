<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicineSupplier;

class MedicineSupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicineSupplier::factory()
            ->count(5)
            ->create();
    }
}
