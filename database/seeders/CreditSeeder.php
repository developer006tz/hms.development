<?php

namespace Database\Seeders;

use App\Models\Credit;
use Illuminate\Database\Seeder;

class CreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Credit::factory()
            ->count(5)
            ->create();
    }
}
