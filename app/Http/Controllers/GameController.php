<?php

namespace GAMEchanging\Http\Controllers;

use GAMEchanging\Card;
use GAMEchanging\Categorie;
use GAMEchanging\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
	public function index(Request $request){

        $lastGame = $request->cookie('gamechanging');
        if($lastGame !== null){
            $popGame = Game::where('id',$lastGame)->first();
            $games = Game::where([['id','!=',$popGame->id],['approved',1]])->orderBy('popularity','desc')->get();
            return view('overzicht', compact('games','popGame'));
        }
        else{
            $games = Game::where('approved',1)->orderBy('popularity','desc')->get();
            return view('overzicht', compact('games'));
        }

    }

    public function search(Request $request){

    	$games = Game::where([['name', 'like', '%' . $request['search'] . '%'],['approved',1]])->get();
    	return view('overzicht', compact('games'));
    }

    public function play(Game $game) {

        #Load game time
    	$min = $game->time_min;
        $max = $game->time_max;
        $start=random_int($min,$max);

        #Add to popularity
        $gameName = $game->name;
        Game::where('name',$gameName)->increment('popularity');
        $category = Categorie::all();

        return response(
            view('play',compact(['min','max','start','game','category'])))
            ->cookie('gamechanging',$game->id, 3600
        );
    }

    public function suggest(Request $request){
        
        $this->validate($request, [
            'suggestion'   => 'required|unique:games,name|string|max:255',
        ]);
        
        Game::create(['name' => $request->suggestion]);

        \Session::flash('message','Bedankt voor uw suggestie.');
        
        return redirect()->route('overzicht');
    }

    public function promo(){
               
        return view('promo');
    }
}
