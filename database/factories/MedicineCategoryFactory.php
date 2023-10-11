<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicineCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicineCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'medicine_category_name' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
