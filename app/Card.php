<?php

namespace GAMEchanging;

use GAMEchanging\Game;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
	protected $visible = ['title','discription'];

    public function game()
    {
        return $this->belongsTo(Game::class,'FK_game');
    }
}
