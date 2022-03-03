<?php

namespace Database\Seeders;

use App\Models\Genre;
//use App\Models\Movie;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    
    public function run()

    // \App\Models\User::factory(10)->create();

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

        Genre::create([

            'genre' => 'Adventure',

        ]);
        Genre::create([

            'genre' => 'Action',

        ]);
        Genre::create([

            'genre' => 'Comedy',

        ]);
        Genre::create([

            'genre' => 'Horror',

        ]);

        Genre::create([

            'genre' => 'Thriller',

        ]);

        Genre::create([

            'genre' => 'Drama',

        ]);

        Genre::create([

            'genre' => 'Romance',

        ]);

        Genre::create([

            'genre' => 'Sci-Fi',

        ]);


      


        $this->call([
            MovieSeeder::class,
            MovieGenreSeeder::class,
           
        ]);
    }
}
