<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramadorLinguagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      //Migrate para criacao da tabela de linguagens_programadores para adicao
      //dinamica de dados.
        Schema::create('programador_linguagem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('programador_id')->unsigned();
            $table->integer('linguagem_id')->unsigned();

            $table->foreign('programador_id')->references('programador_id')->on('programador');
            $table->foreign('linguagem_id')->references('linguagem_id')->on('linguagem');

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
        Schema::dropIfExists('programador_linguagem');
    }
}
