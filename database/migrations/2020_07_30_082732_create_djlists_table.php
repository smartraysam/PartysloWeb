<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDjlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('djlists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->string('follower');
            $table->json('genre');
            $table->string('music');
            $table->json('social');
            $table->json('location');
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
        Schema::dropIfExists('djlists');
    }
}