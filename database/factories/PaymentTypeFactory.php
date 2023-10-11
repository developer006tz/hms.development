<?php

namespace Database\Factories;

use App\Models\PaymentType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PaymentType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'payment_type_name' => $this->faker->text(255),
            'payment_type_description' => $this->faker->text(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
