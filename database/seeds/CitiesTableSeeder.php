<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    App\City::create([
        'name' => 'Zagreb',
        'country_id' => 1
        ]
    );
}
}
