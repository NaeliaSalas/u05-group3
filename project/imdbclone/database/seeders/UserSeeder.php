<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([

            'name' => 'Nova',
            'username' => 'Nova',
            'email' => 'nova@gmail.com',
            'password' => ('password'),
        ]);

        User::create([

            'name' => 'Jonny',
            'username' => 'Jonny',
            'email' => 'jonny@gmail.com',
            'password' => ('password'),
        ]);

        User::create([

            'name' => 'Paulina',
            'username' => 'Paulina',
            'email' => 'Paulina@gmail.com',
            'password' => ('password'),
        ]);

        User::create([

            'name' => 'David',
            'username' => 'David',
            'email' => 'david@gmail.com',
            'password' => ('password'),
        ]);



        User::create([

            'name' => 'Naelia',
            'username' => 'Naelia',
            'email' => 'naelia@gmail.com',
            'password' => ('password'),
        ]);
    }
}
