<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_balance' => $this->faker->randomNumber(1),
            'paid_ammount' => $this->faker->randomNumber(1),
            'remark' => $this->faker->text(255),
            'invoice_status' => 'paid',
            'appointment_id' => \App\Models\Appointment::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
