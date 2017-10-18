<?php

namespace GAMEchanging\Http\Controllers;

use GAMEchanging\Card;
use GAMEchanging\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
	public function index(){

        $games = Game::limit(5)->orderBy('popularity','desc')->get();
        return view('overzicht', compact('games'));
    }

    public function search(Request $request){

    	$games = Game::where('name', 'like', '%' . $request['search'] . '%')->get();
    	return view('overzicht', compact('games'));
    }

    public function play(Game $game) {

        #Load game time
    	$min = $game->time_min;
        $max = $game->time_max;
        $start=random_int($min,$max);

        #Add to popularity
        $gameName = $game->name;
        Game::where('name','=',$gameName)->increment('popularity');


        return view('play',compact(['min','max','start']));
    }

    public function suggest(Request $request){
        
        $this->validate($request, [
            'suggestion'   => 'required|string|max:255',
        ]);
        
        Game::create(['name' => $request->suggestion]);

        \Session::flash('message','Bedankt voor uw suggestie.');
        
        return redirect()->route('overzicht');
    }
}
