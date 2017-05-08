<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creating Contacts Table
        Schema::create('contacts', function(Blueprint $table){
            $table->increments('id');
            $table->integer('belongs_to')->unsigned();
            // no one can create a contact unless it's the user (id). 
            $table->foreign('belongs_to')->reference('id')->on('users');
            $table->string('email', 100)->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->integer('phone_number')->unsigned()->unique();
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
        //drop contacts 
        Schema::drop('contacts');
    }
}
