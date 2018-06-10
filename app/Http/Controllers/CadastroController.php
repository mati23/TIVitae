<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CadastroController extends Controller
{
  public function index()
   {
      //$linguagens = CadastroController::pegarTodasLinguagens();
      $linguagens = DB::table('linguagem')->get();
       return view('cadastro',compact('linguagens'));

   }

   public function pegarTodasLinguagens(){
     $linguagens = DB::table('linguagem')->get();
     return $linguagens;
   }

}
