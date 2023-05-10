<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call([StateSeeder::class]);
        $this->call([CountrySeeder::class]);
        $this->call([ProspectSeeder::class]);
        $this->call([MeasurementsSeeder::class]);
        $this->call([WorkNamesSeeder::class]);
        $this->call([RatesSeeder::class]);
        $this->call([PackagesSeeder::class]);
        $this->call([DiscountSeeder::class]);
        $this->call([ServiceSeeder::class]);

    }
}
