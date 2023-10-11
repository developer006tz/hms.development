<?php

namespace Database\Factories;

use App\Models\InPatient;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InPatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InPatient::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => \App\Models\Patient::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'appointment_diagnosis_test_id' => \App\Models\AppointmentDiagnosisTest::factory(),
            'doctor_id' => \App\Models\Staff::factory(),
        ];
    }
}
