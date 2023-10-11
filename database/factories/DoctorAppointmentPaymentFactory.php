<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\DoctorAppointmentPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorAppointmentPaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DoctorAppointmentPayment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount_paid' => $this->faker->randomNumber(1),
            'payment_day' => $this->faker->randomNumber(1),
            'patient_id' => $this->faker->randomNumber(),
            'doctor_appointment_id' => \App\Models\DoctorAppointment::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
