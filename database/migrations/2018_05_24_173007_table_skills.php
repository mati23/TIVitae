<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tb_skills', function (Blueprint $table){
        //chave estrangeira


        $table->boolean('skills_programmer');
        $table->boolean('skills_dbadmin');
        $table->boolean('skills_system_analyst');
        $table->boolean('skills_webdesigner');
        
      });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
