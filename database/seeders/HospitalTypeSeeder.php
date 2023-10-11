<?php

namespace Database\Seeders;

use App\Models\HospitalType;
use Illuminate\Database\Seeder;

class HospitalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HospitalType::factory()
            ->count(5)
            ->create();
    }
}
