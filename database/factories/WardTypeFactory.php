<?php

namespace Database\Factories;

use App\Models\WardType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class WardTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WardType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ward_type_name' => $this->faker->text(255),
            'ward_type_description' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
