<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Orders;
use App\Models\Inventory;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = Inventory::factory()->count(20)->create();

        Orders::factory()->hasAttached($roles,['amount' => rand(1, 10)])->count(5)->create();
    }
}
