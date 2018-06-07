<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programador extends Model
{
  public function linguagens(){
    return $this->belongsToMany('App/Linguagem');
  }
}
