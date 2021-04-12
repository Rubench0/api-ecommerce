<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Inventory;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition()
    {
        return [
            'amount' => $this->faker->randomNumber(3),
            'stock' => $this->faker->randomNumber(2),
            'min' => $this->faker->randomNumber(1),
            'last_supply' => now(),
            'products_id' => $this->faker->numberBetween($min = 1, $max = 30),
        ];
    }
}
