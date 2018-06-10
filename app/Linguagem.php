<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linguagem extends Model
{
    //
    public function programadores(){
      return $this->belongsToMany('App/Programador','linguagem',);
    }
    public function pegarTodasLinguagens(){
      return Linguagem::all();
    }
}
