<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_no' => $this->faker->text(255),
            'patient_middlename' => $this->faker->text(255),
            'patient_firstname' => $this->faker->text(255),
            'patient_lastname' => $this->faker->text(255),
            'patient_email' => $this->faker->text(255),
            'patient_address' => $this->faker->text(255),
            'patient_phonenumber' => $this->faker->text(255),
            'patient_gender' => 'male',
            'patient_dob' => $this->faker->date(),
            'patient_city' => $this->faker->text(255),
            'patient_zipcode' => $this->faker->text(255),
            'patient_country' => $this->faker->text(255),
            'patient_nationality' => $this->faker->text(255),
            'patient_password' => $this->faker->text(255),
            'patient_default_password' => $this->faker->text(255),
            'patient_photo' => $this->faker->text(255),
            'blood_group_id' => \App\Models\BloodGroup::factory(),
            'hospital_id' => \App\Models\Hospital::factory(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
