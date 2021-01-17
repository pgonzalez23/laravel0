<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */

    function it_welcomes_users_with_nickname()
    {
        $this->get('/saludo/pepito/Polo')
            ->assertStatus(200)
            ->assertSee('Bienvenido Pepito. Tu apodo es Polo.');

    }

    /** @test */

    function it_welcomes_users_without_nickname()
    {
        $this->get('/saludo/pepito')
            ->assertStatus(200)
            ->assertSee('Bienvenido Pepito.');

    }
}
