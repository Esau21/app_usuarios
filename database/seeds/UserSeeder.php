<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Esau Zelaya',
            'email' => 'Esau123@gmail.com',
            'password' => bcrypt('Esau123'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Esau Zelaya',
            'email' => 'Esau123@gmail.com',
            'password' => bcrypt('Esau123'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Esau Zelaya',
            'email' => 'Esau123@gmail.com',
            'password' => bcrypt('Esau123'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Esau Zelaya',
            'email' => 'Esau123@gmail.com',
            'password' => bcrypt('Esau123'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Esau Zelaya',
            'email' => 'Esau123@gmail.com',
            'password' => bcrypt('Esau123'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Esau Zelaya',
            'email' => 'Esau123@gmail.com',
            'password' => bcrypt('Esau123'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Esau Zelaya',
            'email' => 'Esau123@gmail.com',
            'password' => bcrypt('Esau123'),
            'profession_id' => '3'
        ]);


        
    }
}
