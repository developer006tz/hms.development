<?php

namespace Database\Seeders;

use App\Models\MedicineType;
use Illuminate\Database\Seeder;

class MedicineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicineType::factory()
            ->count(5)
            ->create();
    }
}
