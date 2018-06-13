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
     //recebe os dados do formulario html e insere no banco de dados
     $nome = $request->input('nome');
     $telefone = $request->input('telefone');
     $email = $request->input('email');
     $endereco = $request->input('endereco');
     $descricao = $request->input('descricao');
     $linguagens = array_unique($request['check_linguagem']);

     //função que insere o novo programador
     DB::table('programador')->insert(array(['programador_nome'=>$nome,'programador_telefone'=>$telefone,
      'programador_email'=>$email,'programador_endereco'=>$endereco,
      'programador_descricao'=>$descricao]));

      $programador_id = DB::table('programador')->where('programador_nome',$nome)->value('programador_id');

    foreach($linguagens as $lang):
      //$linguagem_id = DB::table('linguagem')->where('linguagem_nome',$lang);
      DB::table('programador_linguagem')->insert([
        'programador_id'=>$programador_id,
        'linguagem_id'=>$lang
      ]);
    endforeach;
     return view('welcome');
   }

}
