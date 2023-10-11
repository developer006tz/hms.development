<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AppointmentFeedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFeedbackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppointmentFeedback::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text(255),
            'status' => 'received',
            'doctor_appointment_id' => \App\Models\DoctorAppointment::factory(),
            'doctor_id' => \App\Models\Staff::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
