<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicationRecommendation;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicationRecommendationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicationRecommendation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'doctor_id' => $this->faker->randomNumber(),
            'medical_recommendation_description' => $this->faker->text(),
            'phamacy_status' => 'accepted',
            'bill_status' => 'paid',
            'staff_id' => \App\Models\Staff::factory(),
            'patient_id' => \App\Models\Patient::factory(),
            'medicine_id' => \App\Models\Medicine::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
