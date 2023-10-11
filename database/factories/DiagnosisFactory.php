<?php

namespace Database\Factories;

use App\Models\Diagnosis;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiagnosisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Diagnosis::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'diagnosis_name' => $this->faker->randomNumber(),
            'diagnosis_price' => $this->faker->randomNumber(1),
            'diagnosis_description' => $this->faker->text(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
