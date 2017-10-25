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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Game $game)
    {
        // $this->validate($request, [
        //     'suggestion'   => 'required|string|max:255',
        // ]);

        return 'test';
        
        // Game::create(['name' => $request->suggestion]);

        // \Session::flash('message','Bedankt voor uw suggestie.');
        
        // return redirect()->route('overzicht');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
