<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('state_order')->insert([
            'name' => 'por entregar',
        ]);
        DB::table('state_order')->insert([
            'name' => 'en proceso',
        ]);
        DB::table('state_order')->insert([
            'name' => 'entregada',
        ]);
    }
}
