<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */

    //En los test se puede quitar la palabra 'public' en las funciones. No se usa CamelCase.

    function it_loads_the_users_list_page()  //Prueba que verifica la ruta /usuarios
    {
        $this->get('/usuarios') //voy a la ruta /usuarios
        ->assertStatus(200)   //recibir alerta codigo 200 (página con exito)
        ->assertSee('Usuarios'); //me gustaría ver en la Página la palabra Usuarios
    }

    /** @test */

    function it_loads_the_users_details_page() //Prueba que verifica la ruta /usuarios/{id} (detalles de usuario)
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalles del usuario: 5');
    }

    /** @test */

    function it_loads_the_new_users_page() //Prueba que verifica la ruta
    {
        $this->get('usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Creando un usuario nuevo');

    }



}
