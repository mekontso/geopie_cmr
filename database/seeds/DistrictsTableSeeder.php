<?php
//Used to create sample data

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds to add sample data.
     *
     * @return void
     */
    public function run()
    {
        // Here we specify the model class and the number of rows to create
        factory(App\Models\District::class, 30)->create();
    }
}
