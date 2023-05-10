<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
        DB::table('packages')->insert([
            'Plannig_package_name' => 'Planning Package 1',
            'work_name_id' => '1',
            'we_provide' => 'Details of Your requirement',
            'we_deliver' => 'Planning in DWG Format',
            'rate_id' => '[\"1\",\"2\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' => 'Structure Package 1',
            'work_name_id' => '2',
            'we_provide' => '1.plan in AUTOCAD compatible format\r\n2. Soil test report',
            'we_deliver' => 'Detailing of structural element in Tabular Format',
            'rate_id' => '[\"3\",\"4\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' => 'Structure Package 2',
            'work_name_id' => '2',
            'we_provide' => '1.Plan in AutoCAD compatible format\r\n2.Soil test report',
            'we_deliver' => '1.Detailing of structural element in \'L\' Cross Section Format\r\n2. Complete analysis & design calculation',
            'rate_id' => '[\"5\",\"6\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' => '3D Floor Plannig Package 1',
            'work_name_id' => '3',
            'we_provide' => 'Plan in AutoCAD compatible format',
            'we_deliver' => '3D Floor Planning in JPEG Format',
            'rate_id' => '[\"7\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' => 'Interior Package 1',
            'work_name_id' => '5',
            'we_provide' => 'Plan in AutoCAD Format',
            'we_deliver' => '1. Flooring Layout\r\n2. Sanitary Layout\r\n3.Ceilings Layout\r\n4. Walls Elevation\r\n5. Furniture Layout\r\n6. Electrification Layout',
            'rate_id' => '[\"8\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' =>'Interior Package 2',
            'work_name_id' => '5',
            'we_provide' => 'Plan in AutoCAD compatible format',
            'we_deliver' => 'Above all with 3D Views/Interactive View', 
            'rate_id' =>  '[\"9\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' =>  'Interior Package 3',
            'work_name_id' => '5',
            'we_provide' =>  'Plan in AutoCAD compatible format',
            'we_deliver' =>  'Only 3D Views/ Interactive Views',
            'rate_id' => '[\"10\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' =>  'Interior Package 4',
            'work_name_id' => '5',
            'we_provide' =>  'Plan, Walls Elevation, Ceiling & Flooring Layout in AutoCAD compatible format',
            'we_deliver' => 'Only 3D Views/ Interactive View', 
            'rate_id' => '[\"11\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' =>  'Package 1', 
            'work_name_id' => '7',
            'we_provide' =>  'Site Plan, Elevations in AutoCAD compatible format',
            'we_deliver' =>  'HD 1280',
            'rate_id' => '[\"12\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('packages')->insert([
            'Plannig_package_name' => 'Package 2',
            'work_name_id' => '7',
            'we_provide' => 'Site Plan, Elevations in AutoCAD compatible format',
            'we_deliver' =>  'Full HD 1920', 
            'rate_id' => '[\"13\"]',
            'created_at' => now(),
            'updated_at' => now()
        ]);
       }
}
 