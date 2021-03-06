<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB; //PARA PODER USAR DB
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        /* PRIMERA FORMA: NO OBTENEMOS DATOS DE LA BASE DE DATOS.
         *  if (request()->has('empty')){ //Si la petición tiene el valor empty (?empty) :
            $users = [];

        } else {

            $users = ['Joel', 'Ellie', 'Tess', 'Tommy', 'Bill'];
        }*/

        // SEGUNDA FORMA: VAMOS A OBTENER LOS DATOS DE LA BASE DE DATOS.

        // $users = DB::table('users')->get(); obtenemos todos los datos de los usuarios almacenados en la base de datos.

        $users = User::all(); //sacamos todos los usuarios.

        $title = 'Listado de usuarios';

        return view('users.index', compact('users', 'title'));

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
        return view('users.show', compact('id')); //compact('id' : Array asociativo donde la clave es como
                                                                // se conoce la variable en la vista y el valor, el valor que le estamos pasando.
    }



}
