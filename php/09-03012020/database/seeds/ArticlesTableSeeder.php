<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i<10; $i++)
        { DB::table("articles")-> insert(
            [
                "title"=> $faker->sentence($nbWords = 6, $variableNbWords = true),
                "slug" => $faker->sentence($nbWords = 6, $variableNbWords = true),
                "description"=> $faker->text($maxNbChars = 200), 
                "content"  => $faker->text($maxNbChars = 200),
            ]);
        }
        //
    }
}