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

            'name' => 'User',
            'username' => 'User',
            'email' => 'user@gmail.com',
            'password' => ('password'),
        ]);

        User::create([

            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => ('12345'),
            'IsAdmin' => '1',

        ]);
    }
}
