<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PreliminaryMeasurement;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreliminaryMeasurementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PreliminaryMeasurement::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'preasure' => $this->faker->text(255),
            'weight' => $this->faker->text(255),
            'height' => $this->faker->randomNumber(1),
            'custom_diagnosis' => [],
            'patient_id' => \App\Models\Patient::factory(),
            'staff_id' => \App\Models\Staff::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
