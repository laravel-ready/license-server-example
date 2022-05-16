<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use LaravelReady\LicenseServer\Database\Factories\LicenseFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
