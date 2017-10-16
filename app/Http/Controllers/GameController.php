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
	    $randomTime = rand(30,60);
        return view('play',compact('randomTime'));
    }
}
