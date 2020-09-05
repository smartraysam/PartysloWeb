<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventstatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventstats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('event_id');
            $table->unsignedBigInteger('going')->default(0);
            $table->unsignedBigInteger('maybe')->default(0);
            $table->unsignedBigInteger('notgoing')->default(0);
            $table->unsignedBigInteger('share')->default(0);
            $table->unsignedBigInteger('like')->default(0);
            $table->unsignedBigInteger('comments')->default(0);
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
        Schema::dropIfExists('eventstats');
    }
}