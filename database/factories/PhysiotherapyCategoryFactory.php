<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PhysiotherapyCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhysiotherapyCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhysiotherapyCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_name' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
