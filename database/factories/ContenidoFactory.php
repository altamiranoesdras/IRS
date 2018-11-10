<?php

use Faker\Generator as Faker;
use Faker\Provider\Image;

$factory->define(\App\Contenido::class, function (Faker $faker) {
    return [
        'titulo' => $faker->word,
        'extracto' => $faker->text,
        'cuerpo' => $faker->paragraph,
        'user_id' => \App\User::all()->random()->id,
        'imagen' => Image::image(storage_path() . '/app/public/contenidos', 600, 350, 'technics', false),
    ];
});
