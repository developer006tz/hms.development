<?php

namespace Database\Factories;

use App\Models\Appointment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appointment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'receptionist_id' => $this->faker->randomNumber(),
            'appointment_datetime' => $this->faker->dateTime(),
            'appointment_status' => 'pending',
            'insuarance_status' => $this->faker->text(255),
            'amount' => $this->faker->randomNumber(1),
            'remark_status' => $this->faker->text(255),
            'patient_id' => \App\Models\Patient::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'doctor_id' => \App\Models\Staff::factory(),
            'preliminary_measurement_id' => \App\Models\PreliminaryMeasurement::factory(),
        ];
    }
}
