<?php

use Illuminate\Database\Seeder;

class CategorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name'=>'neutral','displayName'=>'Neutraal'],
		    ['name'=>'good','displayName'=>'Goed'],
		    ['name'=>'bad','displayName'=>'Slecht'],
		    ['name'=>'finisher','displayName'=>'Afmaker'],
	    ]);
    }
}
