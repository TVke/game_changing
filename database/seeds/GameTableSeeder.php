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
		    ['name'=>'Memorie','discription'=>'Draai twee dezelfde kaartjes om te winnen','picture'=>'memorie.jpeg',],
            ['name'=>'Vier op een rij','discription'=>'Probeer 4 op een rij te krijgen','picture'=>'memorie.jpeg',],
            ['name'=>'Monopoly','discription'=>'Verdien het meeste geld en koop de meeste gronden.','picture'=>'memorie.jpeg',],
            ['name'=>'Dammen','discription'=>'Versla je tegenstander in een potje dammen.','picture'=>'memorie.jpeg',],
		    ['name'=>'Schaken','discription'=>'','picture'=>'memorie.jpeg',],
	    ]);
    }
}
