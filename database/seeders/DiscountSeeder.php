<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            'discount' => '0',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('discounts')->insert([
            'discount' => '10',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('discounts')->insert([
            'discount' => '20',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('discounts')->insert([
            'discount' => '30',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('discounts')->insert([
            'discount' => '40',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}