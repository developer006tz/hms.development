<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AppointmentDiagnosisTest;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentDiagnosisTestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppointmentDiagnosisTest::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hospital_id' => \App\Models\Hospital::factory(),
            'patient_appointment_diagnosis_id' => \App\Models\PatientAppointmentDiagnosis::factory(),
        ];
    }
}
