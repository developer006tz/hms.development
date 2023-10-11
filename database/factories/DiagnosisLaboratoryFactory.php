<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\DiagnosisLaboratory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiagnosisLaboratoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DiagnosisLaboratory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lab_no' => $this->faker->text(255),
            'diagnosis_laboratory_name' => $this->faker->text(255),
            'diagnosis_laboratory_location' => $this->faker->text(255),
            'lab_type' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
            'department_id' => \App\Models\Department::factory(),
        ];
    }
}
