<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'staff_no' => $this->faker->text(255),
            'staff_firstname' => $this->faker->text(255),
            'staff_middlename' => $this->faker->text(255),
            'staff_lastname' => $this->faker->text(255),
            'staff_address' => $this->faker->text(255),
            'staff_photo' => $this->faker->text(255),
            'staff_email' => $this->faker->text(255),
            'staff_document' => $this->faker->text(255),
            'staff_bio' => $this->faker->text(),
            'staff_gender' => 'male',
            'hospital_id' => \App\Models\Hospital::factory(),
            'department_id' => \App\Models\Department::factory(),
            'staff_type_id' => \App\Models\StaffType::factory(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
