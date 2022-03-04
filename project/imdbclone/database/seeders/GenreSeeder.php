<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
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

    }
}
