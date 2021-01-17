<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //generamos array de usuarios
        $users = [

            'Joel',
            'Ellie',
            'Tess',
            'Tommy',
            'Bill',

        ];

        $title = 'Listado de usuarios';
        return view('users', compact('users', 'title'));

        //sabe que hay que buscar dentro de la carpeta views, el archivo users. (ayuda laravel)
        //como el nombre de la variable que pasamos es el mismo que el de la que usamos en la vista, usamos la función compact,
        //a la que le decimos únicamente el nombre que va a tener en la vista, y entiende que la que le estamos pasando
        //es la misma con el '$delante', que es nuestro array.
    }

    public function create()
    {
        return 'Creando un usuario nuevo';
    }

    public function show($id)
    {
        return 'Mostrando detalles del usuario: ' . $id;
    }



}
