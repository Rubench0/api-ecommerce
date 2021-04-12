<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            CategoriesSeeder::class,
            ProvidersSeeder::class,
            PrioritySeeder::class,
            StateOrderSeeder::class,
            OrdersSeeder::class,
        ]);
    }
}
