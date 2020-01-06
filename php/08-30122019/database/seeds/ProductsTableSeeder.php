<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   $faker = Faker\Factory::create();
        for($i=0; $i<10;$i++){ 
         DB::table('products')->insert(
            [
             'name'  => $faker->name($gender = null),
             "price" => $faker->numberBetween($min = 1000, $max = 99000),
             "description"=>$faker->text($maxNbChars = 200),
       
             ]);
        }

    }
}


