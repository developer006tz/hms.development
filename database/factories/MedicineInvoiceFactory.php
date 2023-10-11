<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicineInvoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineInvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicineInvoice::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_no' => $this->faker->text(255),
            'invoice_balance' => $this->faker->randomNumber(1),
            'invoice_tin_no' => $this->faker->text(255),
            'invoice_LPO_no' => $this->faker->text(255),
            'invoice_person' => $this->faker->text(255),
            'invoice_to' => $this->faker->text(255),
            'phamacy_id' => \App\Models\Phamacy::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'payment_type_id' => \App\Models\PaymentType::factory(),
        ];
    }
}
