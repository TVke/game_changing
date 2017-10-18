<?php

namespace GAMEchanging;

use GAMEchanging\Card;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
	protected $fillable = ['name'];
	
    public function card()
    {
        return $this->hasMany(Card::class,'FK_game');
    }
}
