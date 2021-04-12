<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Providers;
use App\Models\Products;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Providers::factory()->has(Products::factory()->count(6))->count(5)->create();
    }
}
