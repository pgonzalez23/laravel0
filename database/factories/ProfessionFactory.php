<?php

use Faker\Generator as Faker;

$factory->define(App\Profession::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(3), //genera como parametro una frase de tres palabras.
    ];
});
