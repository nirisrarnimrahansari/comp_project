<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'state' => 'Rajasthan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('states')->insert([
            'state' => 'Uttar Pradesh',
            'created_at' => now(),
            'updated_at' => now()
        ]);
          DB::table('states')->insert([
            'state' => 'Uttarakhand',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('states')->insert([
            'state' => 'West Bengal',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('states')->insert([
            'state' => 'MP',
            'created_at' => now(),
            'updated_at' => now()
        ]);
}
}
