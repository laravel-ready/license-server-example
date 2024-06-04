<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;

use Illuminate\Database\Seeder;
use LaravelReady\LicenseServer\Services\LicenseService;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $user = User::first();

        foreach ($products as $key => $product) {
            LicenseService::addLicense($product, "{$key}-example.com", $user->id);
        }
    }
}
