<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignalisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signalisations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('event_id');
            $table->unsignedInteger('user_id');
            $table->text('content');
            $table->unique(['event_id','user_id']);
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('signalisations');
    }
}
