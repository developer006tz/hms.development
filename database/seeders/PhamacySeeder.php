<?php

namespace Database\Seeders;

use App\Models\Phamacy;
use Illuminate\Database\Seeder;

class PhamacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phamacy::factory()
            ->count(5)
            ->create();
    }
}
