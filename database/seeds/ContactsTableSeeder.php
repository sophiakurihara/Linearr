<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactsTableSeeder extends Seeder
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
            $contact->belongs_to = 4;
        	$contact->first_name = $faker->firstName;
        	$contact->last_name = $faker->lastName; 
        	$contact->email = $faker->email;
        	$contact->phone_number = $faker->phoneNumber;
        	//saving the entry/contact info
        	$contact->save();
        }
    }
}
