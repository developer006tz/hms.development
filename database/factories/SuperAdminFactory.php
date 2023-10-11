<?php

namespace Database\Factories;

use App\Models\SuperAdmin;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuperAdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SuperAdmin::class;

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
            'email' => $this->faker->text(255),
            'phonenumber' => $this->faker->text(255),
            'password' => $this->faker->text(255),
            'phonenumber_two' => $this->faker->text(255),
            'phonenumber_three' => $this->faker->text(255),
            'address' => $this->faker->text(255),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
