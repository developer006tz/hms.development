<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatientAppointmentDiagnosis;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientAppointmentDiagnosisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientAppointmentDiagnosis::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'symptoms' => $this->faker->text(),
            'diagnosis_description' => $this->faker->text(),
            'status' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
            'appointment_id' => \App\Models\Appointment::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'lab_id' => \App\Models\Lab::factory(),
            'doctor_id' => \App\Models\Staff::factory(),
        ];
    }
}
