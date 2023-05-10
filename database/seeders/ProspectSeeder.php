<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProspectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prospects')->insert([
            'name' => 'admin',
            'organization' => 'IT',
            'address' => 'gulnagri',
            'city' => 'bhilwara',
            'state_id' => '1',
            'country_id' => '1',
            'cell' => '9414372365',
            'phone' => '5432167890',
            'whatsapp_no' => '9414372365',
            'email_id' => 'sadik@gmail.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('prospects')->insert([
            'name' => 'Nimrah',
            'organization' => 'Sale',
            'address' => 'rajendra nagar',
            'city' => 'Indore',
            'state_id' => '2',
            'country_id' => '2',
            'cell' => '1234567890',
            'phone' => '5432167891',
            'whatsapp_no' => '9414312365',
            'email_id' => 'nimrah@gmail.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
          DB::table('prospects')->insert([
            'name' => 'Sadik',
            'organization' => 'Marketing',
            'address' => 'mr9',
            'city' => 'bhilwara',
            'state_id' => '1',
            'country_id' => '1',
            'cell' => '9414372365',
            'phone' => '5432167890',
            'whatsapp_no' => '9414372365',
            'email_id' => 'sadik@gmail.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('prospects')->insert([
            'name' => 'Zubair',
            'organization' => 'IT',
            'address' => 'gulnagri',
            'city' => 'bhilwara',
            'state_id' => '1',
            'country_id' => '1',
            'cell' => '9414372365',
            'phone' => '5432167890',
            'whatsapp_no' => '9414372365',
            'email_id' => 'sadik@gmail.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('prospects')->insert([
            'name' => 'Salman',
            'organization' => 'IT',
            'address' => 'gulnagri',
            'city' => 'bhilwara',
            'state_id' => '1',
            'country_id' => '1',
            'cell' => '9414372365',
            'phone' => '5432167890',
            'whatsapp_no' => '9414372365',
            'email_id' => 'sadik@gmail.com',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
