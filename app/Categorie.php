<?php

namespace GAMEchanging;

use GAMEchanging\Card;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	protected $visible = ['categorie'];

	public function card(){
		return $this->hasMany(Card::class,'FK_categorie');
	}
}
