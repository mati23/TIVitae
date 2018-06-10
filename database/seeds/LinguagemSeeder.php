<?php

use Illuminate\Database\Seeder;

class LinguagemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'Java'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'Python'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'C'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'Delphi'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'Kotlin'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'C++'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'C#'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'JavaScript'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'PHP'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'Ruby'
      ]);
      DB::table('linguagem')->insert([
          'linguagem_nome' => 'Lua'
      ]);
    }
}
