<?php

namespace Database\Factories;

use App\Models\Asset;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asset::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asset_no' => $this->faker->text(255),
            'asset_name' => $this->faker->text(255),
            'asset_purchase_date' => $this->faker->date(),
            'asset_purchase_cost' => $this->faker->randomNumber(1),
            'asset_current_value' => $this->faker->randomNumber(1),
            'asset_manufacture' => $this->faker->text(255),
            'asset_startdate_warant' => $this->faker->date(),
            'asset_enddate_warant' => $this->faker->date(),
            'asset_description' => $this->faker->text(255),
            'asset_status' => 'in use',
            'hospital_id' => \App\Models\Hospital::factory(),
            'asset_type_id' => \App\Models\AssetType::factory(),
            'asset_category_id' => \App\Models\AssetCategory::factory(),
        ];
    }
}
