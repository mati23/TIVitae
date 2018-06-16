<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{
  public function index($id)
   {
     $programador_nome = DB::table('programador')->where('programador_id',$id)->value('programador_nome');
     $programador_telefone = DB::table('programador')->where('programador_id',$id)->value('programador_telefone');

     $telefone_ddd = substr($programador_telefone, 0,2);
     $telefone_restante = substr($programador_telefone, 2,10);
     $programador_email = DB::table('programador')->where('programador_id',$id)->value('programador_email');
     $programador_endereco = DB::table('programador')->where('programador_id',$id)->value('programador_endereco');
     $programador_descricao = DB::table('programador')->where('programador_id',$id)->value('programador_descricao');
       return view('users')->with([
         'programador_nome'=>$programador_nome,
         'telefone_ddd'=>$telefone_ddd,
         'telefone_restante'=>$telefone_restante,
         'programador_email'=>$programador_email,
         'programador_endereco'=>$programador_endereco,
         'programador_descricao'=>$programador_descricao
       ]);
   }

}
