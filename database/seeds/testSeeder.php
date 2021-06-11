<?php

use Illuminate\Database\Seeder;

class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::update([
            'password'  =>  bcrypt('123')
        ]);
    }
}
