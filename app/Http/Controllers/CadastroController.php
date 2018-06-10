<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CadastroController extends Controller
{
  public function index()
   {
      $linguagens = CadastroController::pegarTodasLinguagens();
       return view('cadastro',$linguagens);

   }

   public function pegarTodasLinguagens(){
     $linguagens = DB::table('linguagem')->get();
     return $linguagens;
   }

}
