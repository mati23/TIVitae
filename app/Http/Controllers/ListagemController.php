<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Request;
use DB;
class ListagemController extends Controller
{
  public function index()
   {

    $programadores = DB::table('programador')->get();
    return view('listagem',compact('programadores'));

   }

}
