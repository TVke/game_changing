<?php

namespace GAMEchanging;

use GAMEchanging\Card;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function categorie()
    {
        return $this->hasMany(Card::class,'FK_categorie');
    }
}
