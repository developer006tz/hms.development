<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhysiotherapyApplication;

class PhysiotherapyApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PhysiotherapyApplication::factory()
            ->count(5)
            ->create();
    }
}
