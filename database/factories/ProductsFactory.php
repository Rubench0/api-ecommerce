<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductsFactory extends Factory
{
    protected $model = Products::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'code' => Str::random(4),
            'price' => $this->faker->randomNumber(2),
            'categories_id' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
