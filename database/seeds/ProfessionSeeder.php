<?php

use App\Profession;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB; //REFERENCIA DE RUTA COMPLETA

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //USAMOS ELOQUENT

        Profession::create([
            'title' => 'Desarrollador Back-End'
        ]);

        Profession::create([
            'title' => 'Desarrollador Front-End'
        ]);

        Profession::create([
            'title' => 'Diseñador web'
        ]);

    }
}
