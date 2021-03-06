<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('username');
            $table->string('localisation');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('photo',100);
            $table->text('bio');
            $table->enum('status',['online','offline'])->default('offline');
            $table->enum('right',['admin','visitor'])->default('visitor');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
