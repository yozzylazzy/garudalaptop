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
         \App\Models\User::factory(10)->create();
        // \App\Models\Admin::factory(10)->create();
       // \App\Models\Penjualan::factory(10)->create();
        // \App\Models\Laptop::factory(10)->create();
        // \App\Models\DetilPenjualan::factory(10)->create();
    }
}
