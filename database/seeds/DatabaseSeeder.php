<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables(['professions', 'users']);

        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class); //llamamos al seeder de Usuario en el que hemos creado el nuevo user
    }

    public function truncateTables(array $tables) //vamos a recibir un array (para poder truncar diferentes tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;'); //IGNORAR ERROR DE REPETICIÓN DE COLUMNAS

        foreach ($tables as $table) {

            DB::table($table)->truncate(); //BORRAR COLUMNAS

        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
