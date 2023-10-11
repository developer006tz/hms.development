<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppointmentFeedback;

class AppointmentFeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AppointmentFeedback::factory()
            ->count(5)
            ->create();
    }
}
