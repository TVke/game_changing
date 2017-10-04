<?php

namespace GAMEchanging\Http\Controllers;

use GAMEchanging\Card;
use GAMEchanging\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    function search(Request $request){
    	return $request;
    }

    public function index(){

        $games = Game::limit(5)->get();
        return view('overzicht', compact('games'));
    }

    public function test(){

        return Card::with('game')->get();
    }
}
