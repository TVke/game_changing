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
	    	['title'=>'Shuffle','discription'=>'Haal alle kaarten op het veld door elkaar.','FK_game'=>'1',],
            ['title'=>'Goed Doel','discription'=>'De speler met de minste paren geeft 1 paar aan de tegenstander.','FK_game'=>'1',],
            ['title'=>'Overslaan','discription'=>'Sla een beurt over.','FK_game'=>'1',],
            ['title'=>'Verwarring','discription'=>'Het eerstvolgende paar is voor je tegenstander.','FK_game'=>'1',],
            ['title'=>'Eerlijk spelen','discription'=>'Heeft je tegenstander dubbel zoveel paren? Dan krijg jij er 1.','FK_game'=>'1',],
            ['title'=>'Ongeluksnummer','discription'=>'Heb je 3 paren? Dan begint het spel opnieuw.','FK_game'=>'1',],
            ['title'=>'Ga ervoor!','discription'=>'Je mag zoveel paren nemen als je wilt, maar maak je een fout moet je alle paren aan je tegenstander geven','FK_game'=>'1',],
            ['title'=>'Verloren kaart','discription'=>'1 kaart op het veld moet weg.','FK_game'=>'1',],
            ['title'=>'Gellukige verjaardag!','discription'=>'Je krijgt 1 paar van je tegenstander.','FK_game'=>'1',],
            ['title'=>'Alles of niets','discription'=>'Volgende beurt een foute combinatie? Dan moet je volgende beurt al je kaarten terugleggen.','FK_game'=>'1',],
            ['title'=>'Valsspelen?','discription'=>'Je mag 1 extra kaart omdraaien volgende beurt.','FK_game'=>'1',],
            ['title'=>'Geheugenverlies','discription'=>'2 kaarten op het veld mag je van plaats wisselen.','FK_game'=>'1',],
            ['title'=>'Oeps!','discription'=>'Gooi een gevonden paar weg.','FK_game'=>'1',],
            ['title'=>'Eerlijk delen','discription'=>'Wissel de gevonden paren met elkaar.','FK_game'=>'1',],
            ['title'=>'Verblind','discription'=>'Volgende beurt mag je tegenstander niet meekijken.','FK_game'=>'1',],
            ['title'=>'Dikke pech','discription'=>'In de volgende 2 beurten geen paar genomen? Geef dan een paar aan je tegenstander.','FK_game'=>'1',],

	    ]);
    }
}
