<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicationBill;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicationBillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicationBill::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bill_type' => $this->faker->text(255),
            'quantity' => $this->faker->text(255),
            'price' => $this->faker->randomNumber(1),
            'description' => $this->faker->text(),
            'status' => 'paid',
            'patient_id' => \App\Models\Patient::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
