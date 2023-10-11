<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PhysiotherapyCategory;

class PhysiotherapyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PhysiotherapyCategory::factory()
            ->count(5)
            ->create();
    }
}
