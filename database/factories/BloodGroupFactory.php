<?php

namespace Database\Factories;

use App\Models\BloodGroup;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BloodGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BloodGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blood_group_name' => $this->faker->text(255),
            'blood_group_description' => $this->faker->text(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
