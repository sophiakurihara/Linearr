<?php

use Illuminate\Database\Seeder;

class ContactsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create faker data for tables 
        $faker = Faker\Factory::create();

        for($i = 0; $i <= 10; $i++)
        {
        	//creating the object
        	$contact = new Contact();
        	//populating data in the column names
        	$contact->$faker->firstName;
        	$contact->$faker->lastName; 
        	$contact->$faker->middleName;
        	$contact->$faker->email;
        	$contact->$faker->phoneNumber;
        	//saving the entry/contact info
        	$contact->save();
        }
    }
}
