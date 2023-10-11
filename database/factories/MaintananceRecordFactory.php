<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MaintananceRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaintananceRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MaintananceRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'maintanance_type' => 'in',
            'maintanance_cost' => $this->faker->randomNumber(1),
            'maintanance_vendor' => $this->faker->text(255),
            'maintanance_description' => $this->faker->text(255),
            'maintanance_category' => 'preventive',
            'maintanance_date' => $this->faker->date(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'asset_maintanance_id' => \App\Models\AssetMaintanance::factory(),
        ];
    }
}
