<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MedicineCategory;

class MedicineCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicineCategory::factory()
            ->count(5)
            ->create();
    }
}
