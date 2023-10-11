<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Package::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'package_name' => $this->faker->name(),
            'package_description' => $this->faker->text(),
            'package_mountly_fee' => $this->faker->randomNumber(1),
            'package_year_fee' => $this->faker->randomNumber(1),
        ];
    }
}
