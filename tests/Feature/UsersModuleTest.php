<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\User;

class UserModuleTest extends TestCase
{
    /** @test */

    //En los test se puede quitar la palabra 'public' en las funciones. No se usa CamelCase.

    function it_shows_the_users_list()  //Prueba que verifica la ruta /usuarios
    {
        $this->get('/usuarios') //voy a la ruta /usuarios
        ->assertStatus(200)   //recibir alerta codigo 200 (página con exito)
        ->assertSee('Listado de usuarios') //me gustaría ver en la Página la palabra Usuarios
        ->assertSee('Joel')
        ->assertSee('Ellie');
    }

    /** @test */

    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('Listado de usuarios')
        ->assertSee('No hay usuarios registrados');
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
