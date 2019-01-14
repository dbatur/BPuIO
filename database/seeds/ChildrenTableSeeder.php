<?php

use Illuminate\Database\Seeder;

class ChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Child::create([
            'first_name' => 'Josip',
            'last_name' => 'Covic',
            'school_id' => 1
            ]
        );
    }
}
