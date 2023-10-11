<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MaintananceRecord;

class MaintananceRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaintananceRecord::factory()
            ->count(5)
            ->create();
    }
}
