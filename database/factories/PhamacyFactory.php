<?php

namespace Database\Factories;

use App\Models\Phamacy;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhamacyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phamacy::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phamacy_name' => $this->faker->text(255),
            'phamacy_address' => $this->faker->text(255),
            'phamacy_licence' => $this->faker->text(255),
            'phamacy_phoneumber' => $this->faker->text(255),
            'phamacy_email' => $this->faker->text(255),
            'phamacy_branch' => $this->faker->text(255),
            'phamacy_approval_document' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
