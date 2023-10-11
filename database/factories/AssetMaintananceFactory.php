<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\AssetMaintanance;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetMaintananceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AssetMaintanance::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'request_date' => $this->faker->date(),
            'staff_id' => $this->faker->randomNumber(),
            'asset_maintanance_description' => $this->faker->text(),
            'asset_id' => \App\Models\Asset::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
