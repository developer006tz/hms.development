<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PhysiotherapyApplication;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhysiotherapyApplicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhysiotherapyApplication::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'physiotherapy_entry_date' => $this->faker->date(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'physiotherapy_type_id' => \App\Models\PhysiotherapyType::factory(),
            'physiotherapy_category_id' => \App\Models\PhysiotherapyCategory::factory(),
            'doctor_id' => \App\Models\Staff::factory(),
        ];
    }
}
