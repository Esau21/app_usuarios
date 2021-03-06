<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('profession')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

        DB::table('profession')->insert([
            'title'=> 'Desarrollo Back-end',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollo Front-end',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollo Developer',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollador Python',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollo React',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollo en PHP',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollo Angular',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollo mongo',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollo en Inteligencia Artificial',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollo Ramdon',
        ]);
    }
}
