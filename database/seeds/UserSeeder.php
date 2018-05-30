<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('tb_users')->insert([
            'users_name' => 'Mateus',
            'users_email' => 'mateusarruda232@gmail.com',
            'users_password' => '123456789',
            'users_phone' => '8896061495',
            'users_city' =>'Itapipoca',
            'users_formation' =>'UFC'
        ]);
    }
}
