<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Migrate para criacao da tabela de programadores
        Schema::create('programador',function(Blueprint $table){
          $table->increments('programador_id');
          $table->string('programador_nome',60);
          $table->string('programador_telefone',11);
          $table->string('programador_email',50);
          $table->string('programador_endereco',100);
          $table->text('programador_descricao');

          $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('programador');
        //
    }
}
