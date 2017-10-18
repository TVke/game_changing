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
		    ['name'=>'Memory','description'=>'Draai twee dezelfde kaartjes om te winnen','popularity'=>'18','time_min'=>'15','time_max'=>'30','picture'=>'memorie.jpeg',],
            ['name'=>'Vier op een rij','description'=>'Probeer 4 op een rij te krijgen','popularity'=>'14','time_min'=>'5','time_max'=>'20','picture'=>'memorie.jpeg',],
            ['name'=>'Monopoly','description'=>'Verdien het meeste geld en koop de meeste gronden.','popularity'=>'12','time_min'=>'60','time_max'=>'120','picture'=>'memorie.jpeg',],
            ['name'=>'Dammen','description'=>'Versla je tegenstander in een potje dammen.','popularity'=>'4','time_min'=>'15','time_max'=>'30','picture'=>'memorie.jpeg',],
		    ['name'=>'Schaken','description'=>'Versla je tegenstander in een potje shaken','popularity'=>'2','time_min'=>'15','time_max'=>'30','picture'=>'memorie.jpeg',],
	    ]);
    }
}
