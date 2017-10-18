<?php

namespace GAMEchanging\Http\Controllers;

use GAMEchanging\Card;
use GAMEchanging\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
	public function index(){

        $games = Game::limit(5)->get();
        return view('overzicht', compact('games'));
    }

    public function search(Request $request){

    	$games = Game::where('name', 'like', '%' . $request['search'] . '%')->get();
    	return view('overzicht', compact('games'));
    }

    public function play() {
    	$min = 3;$max = 6;$start=random_int($min,$max);
        return view('play',compact(['min','max','start']));
    }
}
