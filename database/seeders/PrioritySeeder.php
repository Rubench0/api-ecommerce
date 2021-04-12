<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('priority')->insert([
            'name' => 'baja',
        ]);
        DB::table('priority')->insert([
            'name' => 'media',
        ]);
        DB::table('priority')->insert([
            'name' => 'alta',
        ]);
    }
}
