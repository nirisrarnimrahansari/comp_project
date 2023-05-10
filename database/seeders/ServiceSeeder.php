<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'service_name' => '1st Service ',
            'package_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('services')->insert([
            'service_name' => '2nd Service',
            'package_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('services')->insert([
            'service_name' => '3rd Service',
            'package_id' => '1',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
