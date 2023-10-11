<?php

namespace Database\Seeders;

use App\Models\StaffType;
use Illuminate\Database\Seeder;

class StaffTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffType::factory()
            ->count(5)
            ->create();
    }
}
