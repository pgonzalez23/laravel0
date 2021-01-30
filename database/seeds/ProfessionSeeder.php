<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //REFERENCIA DE RUTA COMPLETA

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sirve para mandar infomación a la base de datos para comprobar su funcionalidad


        DB::table('professions')->insert([
            'title' => 'Desarrollador Back-End'
        ]);

        DB::table('professions')->insert([
            'title' => 'Desarrollador Front-End'
        ]);

        DB::table('professions')->insert([
            'title' => 'Diseñador web'
        ]);

    }
}
