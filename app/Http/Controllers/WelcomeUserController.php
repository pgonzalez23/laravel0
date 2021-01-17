<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    //invoke: método mágico  invoca el único método del controlador.

    public function __invoke($name, $nickname = null)
    {
        if ($nickname){

            return 'Bienvenido ' . ucfirst($name) . '. Tu apodo es ' . $nickname . '.';

        } else{

            return 'Bienvenido ' . ucfirst($name) . '.';

        }
    }
}
