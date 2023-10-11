<?php

namespace Database\Seeders;

use App\Models\WardType;
use Illuminate\Database\Seeder;

class WardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WardType::factory()
            ->count(5)
            ->create();
    }
}
