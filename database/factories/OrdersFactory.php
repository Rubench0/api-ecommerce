<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Orders;

class OrdersFactory extends Factory
{
    protected $model = Orders::class;

    public function definition()
    {
        return [
            'order_date' => now(),
            'delivery_date' => now(),
            'priority_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'state_order_id' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
