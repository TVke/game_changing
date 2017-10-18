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
		    ['name'=>'Memory','popularity'=>'18','time_min'=>'15','time_max'=>'30','suggestion'=>'0','approved'=>'1',],
            ['name'=>'Vier op een rij','popularity'=>'14','time_min'=>'5','time_max'=>'20','suggestion'=>'0','approved'=>'1',],
            ['name'=>'Monopoly','popularity'=>'12','time_min'=>'60','time_max'=>'120','suggestion'=>'0','approved'=>'1',],
            ['name'=>'Dammen','popularity'=>'4','time_min'=>'15','time_max'=>'30','suggestion'=>'0','approved'=>'1',],
		    ['name'=>'Schaken','popularity'=>'2','time_min'=>'15','time_max'=>'30','suggestion'=>'0','approved'=>'1',],
	    ]);
    }
}
