<?php

namespace Database\Factories;

use App\Models\AssetType;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AssetType::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_type_name' => $this->faker->text(255),
            'asset_type_description' => $this->faker->text(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
