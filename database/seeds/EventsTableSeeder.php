<?php

use Illuminate\Database\Seeder;
use App\User;
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
        	$scheduledEvent->title = $faker->streetName;
        	$scheduledEvent->description = $faker->paragraph;
        	$scheduledEvent->date_of_event = $faker->date;
        	$scheduledEvent->created_by = User::all()->random()->id;
        	$scheduledEvent->sent_to = "2107748500";
        	$scheduledEvent->save();
        }
    }
}
