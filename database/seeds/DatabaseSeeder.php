<?php

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
        // After we create the specific seeder fo model, we run it from here
        $this->call(DistrictsTableSeeder::class);
    }
}
