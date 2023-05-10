<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'country' => 'Afghanistan',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('countries')->insert([
            'country' => 'Albania',
            'created_at' => now(),
            'updated_at' => now()
        ]);
          DB::table('countries')->insert([
            'country' => 'Algeria',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('countries')->insert([
            'country' => 'India',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('countries')->insert([
            'country' => 'Iran',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
