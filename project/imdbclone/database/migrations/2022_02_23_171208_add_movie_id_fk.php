<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMovieIdFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movie_genres', function (Blueprint $table) {
            $table->foreignId('movie_id_fk')->constrained('movies');
            $table->foreignId('genre_id_fk')->constrained('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie_genres', function (Blueprint $table) {
            Schema::dropIfExists('movie_genres');
        });
    }
}
