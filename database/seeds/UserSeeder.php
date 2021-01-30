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
        //$professions = DB::select('SELECT id FROM professions WHERE title =?', ['Desarrollador Back-end']); //que tipo de trabajo es (con la id)

        //$professionId = DB::table('professions')->whereTitle('Desarrollador Back-End')->value('id');
        //constructor de consultas, laravel sabe que
        // el title es la columna al ser el primer parametro. LO PONEMOS EN LA TABLA DIRECTAMENTE PORQUE SOLO LO USAMOS UNA VEZ.


        //Creamos un usuario:
        DB::table('users')->insert([
           'name' => 'Pepe Pérez',
           'email' => 'pepe@mail.es',
           'password' => bcrypt('123456'),
           'profession_id' => DB::table('professions')->whereTitle('Desarrollador Back-End')->value('id'), //AQUI LO PONGO.

        ]);

    }
}