<?php

namespace GAMEchanging\Http\Controllers;

use GAMEchanging\Card;
use GAMEchanging\Game;
use Illuminate\Http\Request;

class CardsController extends Controller
{
	/**
	 * fetches one random card.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function randomOne(Game $game)
	{
		$chosenCard = Card::where("FK_game", $game->id)->with('categorie')->inRandomOrder()->first();
		return $chosenCard;
	}

    public function store(Request $request)
    {

        $this->validate($request, [
            'suggestion'   => 'required|string|max:255',
        ]);

        Card::create([
            'title' => 'Gebruikersvraag',
            'description' => $request->suggestion,
            'FK_game' => $request->game,
        ]);

        \Session::flash('message','Bedankt voor uw suggestie.');
        
        return redirect()->route('overzicht');
    }

    public function redirect()
    {        
        return redirect()->route('overzicht');
    }
}