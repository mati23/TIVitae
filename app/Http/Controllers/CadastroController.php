<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
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


   public function store(Request $request){
     $nome = $request->input('nome');
     $telefone = $request->input('telefone');
     $email = $request->input('email');
     $endereco = $request->input('endereco');
     $descricao = $request->input('descricao');

     DB::table('programador')->insert(array(['programador_nome'=>$nome,'programador_telefone'=>$telefone,
      'programador_email'=>$email,'programador_endereco'=>$endereco,
      'programador_descricao'=>$descricao]));
     return view('welcome');
   }

}
