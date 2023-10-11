<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhysiotherapyType;

class PhysiotherapyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PhysiotherapyType::factory()
            ->count(5)
            ->create();
    }
}
