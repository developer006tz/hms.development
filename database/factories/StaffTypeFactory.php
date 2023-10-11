<?php

namespace Database\Factories;

use App\Models\StaffType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StaffType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'staff_type_name' => $this->faker->text(255),
            'staff_type_description' => $this->faker->text(255),
        ];
    }
}
