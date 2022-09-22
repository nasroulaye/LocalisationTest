<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Shop;
use App\Models\Restaurants;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Users::factory(5)->create();
        Shop::factory(5)->create();
        Restaurants::factory(5)->create();
    }
}
