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
     $programador_email = DB::table('programador')->where('programador_id',$id)->value('programador_email');
       return view('users')->with([
         'programador_nome'=>$programador_nome,
         'programador_telefone'=>$programador_telefone,
         'programador_email'=>$programador_email
       ]);
   }

}
