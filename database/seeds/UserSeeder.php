<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrUser = [
            [
                'username'  =>  'admin',
                'password'  =>  bcrypt('123'),
                'fullname'  =>  'Rian Fajar Pambudi',
                'level'     =>  '1'
            ],
            [
                'username'  =>  'ppic',
                'password'  =>  bcrypt('123'),
                'fullname'  =>  'Adnan',
                'level'     =>  '2'
            ],
            [
                'username'  =>  'produksi',
                'password'  =>  bcrypt('123'),
                'fullname'  =>  'Suryono',
                'level'     =>  '3'
            ],
        ];

        foreach($arrUser as $user)
        {
            \App\User::create($user);
        }
    }
}
