<?php

namespace Database\Factories;

use App\Models\Assignment;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssignmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Assignment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'assignment_date' => $this->faker->date(),
            'assignment_return_date' => $this->faker->date(),
            'assignment_condition' => 'good',
            'assignment_usage_history' => $this->faker->text(255),
            'assignment_description' => $this->faker->text(),
            'asset_id' => \App\Models\Asset::factory(),
            'staff_id' => \App\Models\Staff::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
