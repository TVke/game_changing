<?php

namespace GAMEchanging;

use GAMEchanging\Game;
use GAMEchanging\Categorie;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $visible = ['categorie','title','description'];

    public function game()
    {
        return $this->belongsTo(Game::class,'FK_game');
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class,'FK_categorie');
    }
}
