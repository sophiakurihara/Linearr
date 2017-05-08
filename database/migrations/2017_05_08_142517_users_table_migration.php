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
            $table->increments('id')->unsigned();
<<<<<<< HEAD:database/migrations/2017_05_08_142517_users_table_migration.php
            $table->string('first_name', 40);
            $table->string('last_name', 40);
=======
            $table->string('name');
>>>>>>> b2ed1986205c3220eba7dd9e0664ec744ef6c273:database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('email')->unique();
            $table->string('phone', 12);
            $table->string('password', 60);
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
