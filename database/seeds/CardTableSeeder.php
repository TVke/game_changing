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

            #Memorie
	    	['title'=>'Shuffle','description'=>'Haal alle kaarten op het veld door elkaar.','FK_game'=>'1',],
            ['title'=>'Goed Doel','description'=>'De speler met de minste paren geeft 1 paar aan de tegenstander.','FK_game'=>'1',],
            ['title'=>'Overslaan','description'=>'Sla een beurt over.','FK_game'=>'1',],
            ['title'=>'Verwarring','description'=>'Het eerstvolgende paar is voor je tegenstander.','FK_game'=>'1',],
            ['title'=>'Eerlijk spelen','description'=>'Heeft je tegenstander dubbel zoveel paren? Dan krijg jij er 1.','FK_game'=>'1',],
            ['title'=>'Ongeluksnummer','description'=>'Heb je 3 paren? Dan begint het spel opnieuw.','FK_game'=>'1',],
            ['title'=>'Ga ervoor!','description'=>'Je mag zoveel paren nemen als je wilt, maar maak je een fout moet je alle paren aan je tegenstander geven','FK_game'=>'1',],
            ['title'=>'Verloren kaart','description'=>'1 kaart op het veld moet weg.','FK_game'=>'1',],
            ['title'=>'Gellukige verjaardag!','description'=>'Je krijgt 1 paar van je tegenstander.','FK_game'=>'1',],
            ['title'=>'Alles of niets','description'=>'Volgende beurt een foute combinatie? Dan moet je volgende beurt al je kaarten terugleggen.','FK_game'=>'1',],
            ['title'=>'Valsspelen?','description'=>'Je mag 1 extra kaart omdraaien volgende beurt.','FK_game'=>'1',],
            ['title'=>'Geheugenverlies','description'=>'2 kaarten op het veld mag je van plaats wisselen.','FK_game'=>'1',],
            ['title'=>'Oeps!','description'=>'Gooi een gevonden paar weg.','FK_game'=>'1',],
            ['title'=>'Eerlijk delen','description'=>'Wissel de gevonden paren met elkaar.','FK_game'=>'1',],
            ['title'=>'Verblind','description'=>'Volgende beurt mag je tegenstander niet meekijken.','FK_game'=>'1',],
            ['title'=>'Dikke pech','description'=>'In de volgende 2 beurten geen paar genomen? Geef dan een paar aan je tegenstander.','FK_game'=>'1',],

            #Vier op een rij
            ['title'=>'2 voor de prijs van 1','description'=>'Je mag twee schijven steken deze beurt.','FK_game'=>'2',],
            ['title'=>'Geheugenverlies','description'=>'Sla een beurt over.','FK_game'=>'2',],
            ['title'=>'Delen?','description'=>'Je mag de schijf van je tegenstander zijn beurt zelf plaatsen.','FK_game'=>'2',],
            ['title'=>'Valsspelen','description'=>'Als vier schijven met dezelfde kleur in contact staan heb je gewonnen. Ze moeten niet in een rij staan.','FK_game'=>'2',],
            ['title'=>'Tijd terugspoelen!','description'=>'Haal de laatst geplaatste schijf eruit.','FK_game'=>'3',],
            ['title'=>'Wisselen','description'=>'Wissel van kleur!','FK_game'=>'3',],

            #Monopoly
            ['title'=>'Donatie','description'=>'Krijg 100 euro!','FK_game'=>'3',],
            ['title'=>'Uitzetting','description'=>'Je mag een huis van je tegenstander nemen.','FK_game'=>'3',],
            ['title'=>'Overslaan','description'=>'Sla een beurt over.','FK_game'=>'3',],

            #Dammen
            ['title'=>'Je slag slaan','description'=>'Verwijder een schijf van de tegenstander.','FK_game'=>'4',],
            ['title'=>'Jouw beurt?','description'=>'Verplaats een schijf van de tegenstander.','FK_game'=>'4',],
            ['title'=>'Overslaan','description'=>'Sla een beurt over.','FK_game'=>'4',],

            #Schaken
            ['title'=>'Je slag slaan','description'=>'Verwijder een schijf van je tegenstander.','FK_game'=>'5',],
            ['title'=>'Jouw beurt?','description'=>'Verplaats een schijf van je tegenstander.','FK_game'=>'5',],
            ['title'=>'Overslaan','description'=>'Sla een beurt over.','FK_game'=>'5',],

	    ]);
    }
}
