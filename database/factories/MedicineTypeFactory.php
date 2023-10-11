<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicineType;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicineType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'medicine_type_name' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
