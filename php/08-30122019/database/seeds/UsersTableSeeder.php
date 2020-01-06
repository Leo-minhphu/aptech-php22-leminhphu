<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        for($i=0; $i<10;$i++){
        $name ="Nam".$i;
        $email="nam".$i."gmail.com";
        DB::table("users")->insert(
            ["name" =>$name,
             "email" =>$email,
            ]);

        }
       
    }
}
