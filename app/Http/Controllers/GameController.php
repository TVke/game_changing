<?php

namespace GAMEchanging\Http\Controllers;

use GAMEchanging\Card;
use GAMEchanging\Categorie;
use GAMEchanging\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GameController extends Controller
{
	public function index(Request $request){

        $lastGame = $request->cookie('gamechanging');
        if($lastGame !== null){
        	$intro = false;
            $popGame = Game::where('id',$lastGame)->first();
            $games = Game::where([['id','!=',$popGame->id],['approved',1]])->orderBy('popularity','desc')->get();
            return view('overzicht', compact(['games','popGame','intro']));
        }
        else{
	        $intro = true;
            $games = Game::where('approved',1)->orderBy('popularity','desc')->get();
            return view('overzicht', compact(['games','intro']));
        }

    }

    public function search(Request $request){
    	$games = Game::where([['name', 'like', '%' . $request['search'] . '%'],['approved',1]])->get();
    	$search = true;$intro = false;
    	return view('overzicht', compact(['games','intro','search']));
    }

    public function play(Game $game) {

        #Load game time
    	$min = $game->time_min;
        $max = $game->time_max;
        $start=random_int($min,$max);

        #Add to popularity
        $gameName = $game->name;
        Game::where('name',$gameName)->increment('popularity');
        $categories = Categorie::all();

        return response(
            view('play',compact(['min','max','start','game','categories'])))
            ->cookie('gamechanging',$game->id, 3600);
    }

    public function suggest(Request $request){
        
        $this->validate($request, [
            'suggestion' => 'required|string|max:255|unique:games,name',
        ]);
        
        Game::create(['name' => $request->suggestion]);

        Session::flash('message','Bedankt voor uw suggestie.');
        
        return redirect()->route('overzicht');
    }

    public function win(Game $game){
	    return view('win',compact('game'));
    }

    public function promo(){
               
        return view('promo');
    }
}
