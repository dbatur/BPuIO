<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
{
    App\School::create([
        'name' => 'OS grof Janko Draskovic',
        'city_id' => 1
        ]
    );
}
    }
}
