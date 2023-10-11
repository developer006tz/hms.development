<?php

namespace Database\Seeders;

use App\Models\HospitalAdmin;
use Illuminate\Database\Seeder;

class HospitalAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HospitalAdmin::factory()
            ->count(5)
            ->create();
    }
}
