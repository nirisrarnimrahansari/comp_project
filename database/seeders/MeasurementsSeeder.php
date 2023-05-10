<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MeasurementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measurements')->insert([
            'measurement_name' => 'squarefeet',
            'measurement_short_name' => 'sqft',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('measurements')->insert([
            'measurement_name' => 'Metre',
            'measurement_short_name' => 'm',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('measurements')->insert([
            'measurement_name' => 'Quintal',
            'measurement_short_name' => 'q',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('measurements')->insert([
            'measurement_name' => 'centimeter',
            'measurement_short_name' => 'cm',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
