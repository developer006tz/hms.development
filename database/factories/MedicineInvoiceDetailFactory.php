<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicineInvoiceDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineInvoiceDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicineInvoiceDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'quantity' => $this->faker->randomNumber(),
            'price' => $this->faker->randomNumber(1),
            'patient_name' => $this->faker->text(255),
            'discount' => $this->faker->randomNumber(1),
            'medicine_invoice_id' => \App\Models\MedicineInvoice::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'phamacy_id' => \App\Models\Phamacy::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'medicine_id' => \App\Models\Medicine::factory(),
        ];
    }
}
