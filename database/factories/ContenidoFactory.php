<?php

use Faker\Generator as Faker;

$factory->define(\App\Contenido::class, function (Faker $faker) {
    return [
        'titulo' => $faker->title,
        'extracto' => $faker->text,
        'cuerpo' => $faker->paragraph,
        'imagen' => \Faker\Provider\Image::image(storage_path() . '/app/public/contenidos', 600, 350, 'food', false),
    ];
});
