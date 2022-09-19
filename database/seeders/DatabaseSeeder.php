<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Shop;

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
    }
}
