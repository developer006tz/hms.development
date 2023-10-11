<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicineSupplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineSupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicineSupplier::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'supplier_name' => $this->faker->text(255),
            'supplier_email' => $this->faker->text(255),
            'supplier_phonenumber' => $this->faker->text(255),
            'supplier_address' => $this->faker->text(255),
            'supplier_city' => $this->faker->text(255),
            'supplier_country' => $this->faker->text(255),
            'phamacy_id' => \App\Models\Phamacy::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
        ];
    }
}
