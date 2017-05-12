<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //creating events table 
        Schema::create('events', function(Blueprint $table){
            $table->increments('id')->unsigned();
            $table->boolean('text_sent');
            $table->string('title', 40); 
            $table->text('description'); 
            $table->dateTime('date_of_event');
            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');
            $table->string('sent_to');
            // insert foreign key for sent to phone number == string of phone numbers 
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
        //Drop Events 
        Schema::drop('events');
    }
}
