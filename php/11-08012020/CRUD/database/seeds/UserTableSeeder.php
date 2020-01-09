<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i<10; $i++){
            User::create(
             [ "name"=>$faker->name,
               "email"=>$faker->email,
             ]);
            }   
             
        }
         // QUERY BUILDER
        //// { DB::table("users")-> insert(
        //     [
        //         "name"=>$faker->name,
        //         "email"=>$faker->email,
        //     ]);
            
    
}
