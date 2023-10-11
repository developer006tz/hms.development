<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PhysiotherapyType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhysiotherapyTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhysiotherapyType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type_name' => $this->faker->text(255),
            'type_description' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
