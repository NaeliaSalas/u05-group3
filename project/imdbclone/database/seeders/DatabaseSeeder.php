<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use App\Models\MovieGenres;
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

    {
        $this->call([

            GenreSeeder::class,
            UserSeeder::class,
            MovieSeeder::class,
            MovieGenreSeeder::class,

        ]);
    }
}
