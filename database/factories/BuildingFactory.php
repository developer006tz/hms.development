<?php

namespace Database\Factories;

use App\Models\Building;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class BuildingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Building::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'building_no' => $this->faker->text(255),
            'building_name' => $this->faker->text(255),
            'building_type' => 'high flow',
            'no_flow' => $this->faker->text(255),
            'no_room' => $this->faker->text(255),
            'building_location' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
