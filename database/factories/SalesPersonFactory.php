<?php

namespace Database\Factories;

use App\Models\SalesPerson;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalesPersonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SalesPerson::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'return_type' => 'patient',
            'return_date' => $this->faker->date(),
            'customer_information' => $this->faker->text(255),
            'return_quantity' => $this->faker->randomNumber(),
            'return_notes' => $this->faker->text(255),
            'stock_total' => $this->faker->randomNumber(1),
            'hospital_id' => \App\Models\Hospital::factory(),
            'phamacy_id' => \App\Models\Phamacy::factory(),
            'medicine_id' => \App\Models\Medicine::factory(),
        ];
    }
}
