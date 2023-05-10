<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('rates')->insert([
            'name_id' => '1',
            'price' => '4',
            'value' => '3000',
            'measurement_id' => '1',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '1',
            'price' => '2',
            'value' => '3001',
            'measurement_id' => '1',
            'condition' => '>=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '2',
            'price' => '5',
            'value' => '3000',
            'measurement_id' => '1',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '2',
            'price' => '2',
            'value' => '3001',
            'measurement_id' => '1',
            'condition' => '>=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '2',
            'price' => '7',
            'value' => '3000',
            'measurement_id' => '1',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '2',
            'price' => '3',
            'value' => '3001',
            'measurement_id' => '1',
            'condition' => '>=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '3',
            'price' => '2',
            'measurement_id' => '1',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '5',
            'price' => '7',
            'measurement_id' => '1',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '5',
            'price' => '15',
            'measurement_id' => '1',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '5',
            'price' => '11',
            'measurement_id' => '1',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '5',
            'price' => '8',
            'measurement_id' => '1',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '7',
            'price' => '30000',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rates')->insert([
            'name_id' => '7',
            'price' => '40000',
            'condition' => '=',
            'created_at' => now(),
            'updated_at' => now()
        ]);
       
    }
}
