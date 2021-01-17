<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Hola';
});

Route::get('/usuarios', 'UserController@index'); //formato cadena de texto: nombre del controlador, @, nombre del método al que quiero
                                                 //llamar.

/*
 * Ruta menos amigable que la definida debajo.
 *
 * Route::get('/Usuarios/detalles', function () {

   return 'Mostrando detalles del usuario: ' . $_GET['id'];

});*/


Route::get('usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');

//para no tener que cambiar el orden de rutas, concretamos que la id ha de ser un numero
// que se puede repetir una o más veces.


Route::get('usuarios/nuevo', 'UserController@create');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController');

//la interrogación dice que el nickname
// puede estar o no estar (hay que asignarle un valor por defecto, null). Añadimos la condición:



