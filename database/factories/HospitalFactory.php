<?php

namespace Database\Factories;

use App\Models\Hospital;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class HospitalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hospital::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hospital_name' => $this->faker->text(255),
            'hospital_logo' => $this->faker->text(255),
            'hospital_location' => $this->faker->text(255),
            'hospital_address_one' => $this->faker->text(255),
            'hospital_address_two' => $this->faker->text(255),
            'hospital_tinnumber' => $this->faker->text(255),
            'hospital_phonenumber' => $this->faker->text(255),
            'hospital_email' => $this->faker->text(255),
            'hospital_city' => $this->faker->text(255),
            'hospital_country' => $this->faker->text(255),
            'hospital_zipcode' => $this->faker->text(255),
            'hospital_fax' => $this->faker->text(255),
            'hospital_website_link' => $this->faker->text(255),
            'hospital_type_id' => \App\Models\HospitalType::factory(),
            'package_id' => \App\Models\Package::factory(),
        ];
    }
}
