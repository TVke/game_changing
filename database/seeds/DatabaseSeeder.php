<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $this->call(GameTableSeeder::class);
	    $this->call(CardTableSeeder::class);
    }
}
