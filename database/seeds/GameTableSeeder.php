<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('games')->insert([
		    ['name'=>'Memorie','discription'=>'Draai twee dezelfde kaartjes om een paar te verkrijgen. Verzamel zoveel mogelijk paren om het spel te winnen','picture'=>'memorie.jpeg',],
	    ]);
    }
}
