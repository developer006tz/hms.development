<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AppointmentDoctorInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentDoctorInvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppointmentDoctorInvoice::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'balance' => $this->faker->randomNumber(1),
            'paid_amount' => $this->faker->randomNumber(1),
            'description' => $this->faker->text(255),
            'remark' => $this->faker->text(),
            'status' => 'partial paid',
            'doctor_appointment_id' => \App\Models\DoctorAppointment::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'staff_id' => \App\Models\Staff::factory(),
        ];
    }
}
