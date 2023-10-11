<?php

namespace Database\Seeders;

use App\Models\SalesPerson;
use Illuminate\Database\Seeder;

class SalesPersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SalesPerson::factory()
            ->count(5)
            ->create();
    }
}
