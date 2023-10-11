<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AssetCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AssetCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_category_name' => $this->faker->text(255),
            'asset_category_description' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
