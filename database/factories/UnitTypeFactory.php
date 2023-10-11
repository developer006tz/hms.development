<?php

namespace Database\Factories;

use App\Models\UnitType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UnitType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
