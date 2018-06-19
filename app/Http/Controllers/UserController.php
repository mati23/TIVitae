<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
  public function index($id)
   {
     //pega do banco de dados todos os dados que deverão ser exibidos
     // na página do usuário
     $programador_nome = DB::table('programador')->where('programador_id',$id)->value('programador_nome');
     $programador_id = DB::table('programador')->where('programador_id',$id);

     $programador_telefone = DB::table('programador')->where('programador_id',$id)->value('programador_telefone');

     $telefone_ddd = substr($programador_telefone, 0,2);
     $telefone_restante = substr($programador_telefone, 2,10);
     $programador_email = DB::table('programador')->where('programador_id',$id)->value('programador_email');
     $programador_endereco = DB::table('programador')->where('programador_id',$id)->value('programador_endereco');
     $programador_descricao = DB::table('programador')->where('programador_id',$id)->value('programador_descricao');

     $programador_linguagens = DB::table('programador_linguagem')->where('programador_id',$id)->get();

     $vetor_de_linames = $this->retornaLinguagensId($programador_linguagens);

       return view('users')->with([
         'programador_nome'=>$programador_nome,
         'telefone_ddd'=>$telefone_ddd,
         'telefone_restante'=>$telefone_restante,
         'programador_email'=>$programador_email,
         'programador_endereco'=>$programador_endereco,
         'programador_descricao'=>$programador_descricao,
         'proglin_id'=>$vetor_de_linames
       ]);
   }

   public function retornaLinguagensId($programador_linguagens){
     $vetor_de_proglin = [];
     $vetor_de_linames = [];

     foreach ($programador_linguagens as $proglin) {
      array_push($vetor_de_proglin, $proglin->linguagem_id) ;
     }

     foreach ($vetor_de_proglin as $lin_id) {
      array_push($vetor_de_linames, DB::table('linguagem')->where('linguagem_id',$lin_id)->value('linguagem_nome')) ;
     }
     return $vetor_de_linames;
   }



}
