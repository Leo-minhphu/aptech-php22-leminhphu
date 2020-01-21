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
        $faker = Faker\Factory:: create();
        for($i=0; $i<10;$i++)
        { $title = $faker ->sentence($nbWords = 6, $variableNbWords = true);
            DB::table("articles")->insert(
            ["title" => $title,
             "slug" => str_replace ("","-",$title),
             "description" => $faker->text($maxNbChars = 200),  
            ]);

        }
        //
    }
}
