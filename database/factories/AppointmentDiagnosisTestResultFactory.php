<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AppointmentDiagnosisTestResult;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentDiagnosisTestResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppointmentDiagnosisTestResult::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => $this->faker->randomNumber(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'staff_id' => \App\Models\Staff::factory(),
            'appointment_diagnosis_test_id' => \App\Models\AppointmentDiagnosisTest::factory(),
        ];
    }
}
