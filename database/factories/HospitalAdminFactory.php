<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\HospitalAdmin;
use Illuminate\Database\Eloquent\Factories\Factory;

class HospitalAdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HospitalAdmin::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->text(255),
            'middlename' => $this->faker->text(255),
            'lastname' => $this->faker->text(255),
            'username' => $this->faker->text(255),
            'email' => $this->faker->email(),
            'phonenumber' => $this->faker->text(255),
            'password' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
