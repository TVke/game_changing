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
	    	['title'=>'Shuffle','description'=>'Haal alle kaarten op het veld door elkaar.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Goed Doel','description'=>'De speler met de minste paren geeft 1 paar aan de tegenstander.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Overslaan','description'=>'Sla een beurt over.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'3','approved'=>1,],
            ['title'=>'Verwarring','description'=>'Het eerstvolgende paar is voor je tegenstander.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'3','approved'=>1,],
            ['title'=>'Eerlijk spelen','description'=>'Heeft je tegenstander dubbel zoveel paren? Dan krijg jij er 1.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Ongeluksnummer','description'=>'Heb je 3 paren? Dan begint het spel opnieuw.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'4','approved'=>1,],
            ['title'=>'Ga ervoor!','description'=>'Je mag zoveel paren nemen als je wilt, maar maak je een fout moet je alle paren aan je tegenstander geven','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Verloren kaart','description'=>'1 kaart op het veld moet weg.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Gellukige verjaardag!','description'=>'Je krijgt 1 paar van je tegenstander.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Alles of niets','description'=>'Volgende beurt een foute combinatie? Dan moet je volgende beurt al je kaarten terugleggen.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Valsspelen?','description'=>'Je mag 1 extra kaart omdraaien volgende beurt.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Geheugenverlies','description'=>'2 kaarten op het veld mag je van plaats wisselen.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Oeps!','description'=>'Gooi een gevonden paar weg.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'3','approved'=>1,],
            ['title'=>'Eerlijk delen','description'=>'Wissel de gevonden paren met elkaar.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Verblind','description'=>'Volgende beurt mag je tegenstander niet meekijken.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Dikke pech','description'=>'In de volgende 2 beurten geen paar genomen? Geef dan een paar aan je tegenstander.','image'=>'shuffle.png','FK_game'=>'1','FK_categorie'=>'3','approved'=>1,],

            #Vier op een rij
            ['title'=>'2 voor de prijs van 1','description'=>'Je mag twee schijven steken deze beurt.','image'=>'shuffle.png','FK_game'=>'2','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Geheugenverlies','description'=>'Sla een beurt over.','image'=>'shuffle.png','FK_game'=>'2','FK_categorie'=>'3','approved'=>1,],
            ['title'=>'Delen?','description'=>'Je mag de schijf van je tegenstander zijn beurt zelf plaatsen.','image'=>'shuffle.png','FK_game'=>'2','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Valsspelen','description'=>'Als vier schijven met dezelfde kleur in contact staan heb je gewonnen. Ze moeten niet in een rij staan.','image'=>'shuffle.png','FK_game'=>'2','FK_categorie'=>'4','approved'=>1,],
            ['title'=>'Tijd terugspoelen!','description'=>'Haal de laatst geplaatste schijf eruit.','image'=>'shuffle.png','FK_game'=>'3','FK_categorie'=>'1','approved'=>1,],
            ['title'=>'Wisselen','description'=>'Wissel van kleur!','image'=>'shuffle.png','FK_game'=>'3','FK_categorie'=>'1','approved'=>1,],

            #Monopoly
            ['title'=>'Donatie','description'=>'Krijg 100 euro!','image'=>'shuffle.png','FK_game'=>'3','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Uitzetting','description'=>'Je mag een huis van je tegenstander nemen.','image'=>'shuffle.png','FK_game'=>'3','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Overslaan','description'=>'Sla een beurt over.','image'=>'shuffle.png','FK_game'=>'3','FK_categorie'=>'3','approved'=>1,],

            #Dammen
            ['title'=>'Je slag slaan','description'=>'Verwijder een schijf van de tegenstander.','image'=>'shuffle.png','FK_game'=>'4','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Jouw beurt?','description'=>'Verplaats een schijf van de tegenstander.','image'=>'shuffle.png','FK_game'=>'4','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Overslaan','description'=>'Sla een beurt over.','image'=>'shuffle.png','FK_game'=>'4','FK_categorie'=>'3',],

            #Schaken
            ['title'=>'Je slag slaan','description'=>'Verwijder een schijf van je tegenstander.','image'=>'shuffle.png','FK_game'=>'5','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Jouw beurt?','description'=>'Verplaats een schijf van je tegenstander.','image'=>'shuffle.png','FK_game'=>'5','FK_categorie'=>'2','approved'=>1,],
            ['title'=>'Overslaan','description'=>'Sla een beurt over.','image'=>'shuffle.png','FK_game'=>'5','FK_categorie'=>'3','approved'=>1,],

	    ]);
    }
}
