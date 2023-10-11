<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssetMaintanance;

class AssetMaintananceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AssetMaintanance::factory()
            ->count(5)
            ->create();
    }
}
