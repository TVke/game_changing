<?php

use Illuminate\Database\Seeder;

class CardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('cards')->insert([
	    	['title'=>'Shuffle','discription'=>'haal alle prentjes door elkaar en speel verder.','FK_game'=>'1',],
	    ]);
    }
}
