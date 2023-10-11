<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\DoctorAppointment;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorAppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DoctorAppointment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'appointment_datetime' => $this->faker->dateTime(),
            'doctor_appoitment_description' => $this->faker->text(255),
            'doctor_appointment_status' => 'pending',
            'patient_id' => \App\Models\Patient::factory(),
            'doctor_id' => \App\Models\Staff::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
