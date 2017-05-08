<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
	 public function run()
    {
    	

    	$faker = Faker\Factory::create();
        
    	for($i = 0; $i <= 10; $i++){
	        $user = new User();
	    	$user->first_name = $faker->name;
	    	$user->last_name = $faker->name;
	    	$user->email = $faker->email;
	    	$user->phone = "929-555-4445";
	    	$user->password = $faker->password; //-- Mutator takes over the hash hash::make($value/password)
	    	$user->save();
    	}
    }
}