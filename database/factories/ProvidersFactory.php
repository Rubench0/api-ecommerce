<?php

namespace Database\Factories;

use App\Models\Providers;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProvidersFactory extends Factory
{
    protected $model = Providers::class;
 
    public function definition()
    {
        return [
            'name' => $this->faker->company,
        ];
    }
}
