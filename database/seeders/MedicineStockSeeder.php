<?php

namespace Database\Seeders;

use App\Models\MedicineStock;
use Illuminate\Database\Seeder;

class MedicineStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicineStock::factory()
            ->count(5)
            ->create();
    }
}
