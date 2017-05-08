<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create an events seeder to populate seeder table 
        $faker = Faker\Factory::create();

        for ($i = 0; $i <= 10; $i++)
        {
        	//creating an object for the event 
        	$scheduledEvent = new Event();
        	//populating faker data
        	//event targeting the column of x,y,z 
        	$scheduledEvent->description = $faker->paragraph;
        	$scheduledEvent->date_of_event = $faker->date;
        	$scheduledEvent->created_by = 1;
        	$scheduledEvent->sent_to = "8084362462";
        	$scheduledEvent->save();
        }
    }
}
