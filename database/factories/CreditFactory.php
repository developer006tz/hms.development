<?php

namespace Database\Factories;

use App\Models\Credit;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CreditFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Credit::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'credit_client' => $this->faker->text(255),
            'credit_date' => $this->faker->date(),
            'credit_address' => $this->faker->text(255),
            'credit_phonenumber' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
            'staff_id' => \App\Models\Staff::factory(),
        ];
    }
}
