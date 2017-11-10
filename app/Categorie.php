<?php

namespace GAMEchanging;

use GAMEchanging\Card;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	protected $visible = ['name'];

	public function card(){
		return $this->belongsTo(Card::class,'FK_categorie','id');
	}
}
