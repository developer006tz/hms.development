<?php

namespace Database\Factories;

use App\Models\Medicine;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medicine::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'medicine_name' => $this->faker->text(255),
            'medicine_amount' => $this->faker->randomNumber(1),
            'medicine_expire_date' => $this->faker->date(),
            'medicine_barcode' => $this->faker->text(255),
            'medicine_generic_name' => $this->faker->text(255),
            'medicine_description' => $this->faker->text(),
            'medicine_image' => $this->faker->text(255),
            'medicine_status' => 'publish',
            'medicine_manufacture' => $this->faker->text(255),
            'medicine_manufacture_date' => $this->faker->date(),
            'medicine_entry_date' => $this->faker->date(),
            'medicine_discount' => $this->faker->randomNumber(1),
            'hospital_id' => \App\Models\Hospital::factory(),
            'phamacy_id' => \App\Models\Phamacy::factory(),
            'unit_type_id' => \App\Models\UnitType::factory(),
            'medicine_type_id' => \App\Models\MedicineType::factory(),
        ];
    }
}
