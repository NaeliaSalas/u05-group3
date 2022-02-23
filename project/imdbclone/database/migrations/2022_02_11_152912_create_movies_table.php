<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('body');
=======
            $table->mediumText('body');
>>>>>>> main
            $table->string('pics');
            $table->string('genre');
            $table->string('rating');
            $table->string('trailer');
            $table->integer('yearproduced');
            $table->string('director');
            $table->string('title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
