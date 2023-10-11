<?php

namespace Database\Factories;

use App\Models\Ward;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class WardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ward::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ward_no' => $this->faker->text(255),
            'ward_description' => $this->faker->text(255),
            'ward_name' => $this->faker->text(255),
            'ward_location' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
            'ward_type_id' => \App\Models\WardType::factory(),
        ];
    }
}
