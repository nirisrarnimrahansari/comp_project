<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkNamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_names')->insert([
            'work_name' => 'Planning',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('work_names')->insert([
            'work_name' => 'Structure',
            'created_at' => now(),
            'updated_at' => now()
        ]);
          DB::table('work_names')->insert([
            'work_name' => '3D Floor',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('work_names')->insert([
            'work_name' => 'Exterior',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('work_names')->insert([
            'work_name' => 'Interior',
            'created_at' => now(),
            'updated_at' => now()
        ]);   
             DB::table('work_names')->insert([
            'work_name' => 'Working Drawings',
            'created_at' => now(),
            'updated_at' => now()
        ]);
                DB::table('work_names')->insert([
            'work_name' => 'Walk-Through',
            'created_at' => now(),
            'updated_at' => now()
        ]);
}
}
