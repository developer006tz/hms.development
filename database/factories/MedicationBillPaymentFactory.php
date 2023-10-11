<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicationBillPayment;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicationBillPaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicationBillPayment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomNumber(1),
            'appointment_id' => \App\Models\Appointment::factory(),
            'payment_type_id' => \App\Models\PaymentType::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'invoice_id' => \App\Models\Invoice::factory(),
        ];
    }
}
