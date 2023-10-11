<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\MedicineStock;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineStockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MedicineStock::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'stock_batch' => $this->faker->text(255),
            'stock_initial_quantity' => $this->faker->randomNumber(),
            'stock_available_quantity' => $this->faker->randomNumber(),
            'stock_entry_date' => $this->faker->date(),
            'stock_expire_date' => $this->faker->date(),
            'stock_remark' => $this->faker->text(255),
            'stock_reorder-level' => $this->faker->text(255),
            'stock_expire_alert' => $this->faker->text(255),
            'hospital_id' => \App\Models\Hospital::factory(),
            'phamacy_id' => \App\Models\Phamacy::factory(),
            'medicine_supplier_id' => \App\Models\MedicineSupplier::factory(),
        ];
    }
}
