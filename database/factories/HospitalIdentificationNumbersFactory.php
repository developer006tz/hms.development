<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\HospitalIdentificationNumbers;
use Illuminate\Database\Eloquent\Factories\Factory;

class HospitalIdentificationNumbersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HospitalIdentificationNumbers::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prefix' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
