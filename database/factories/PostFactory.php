<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'titulo' => $faker->word,
        'extracto' => $faker->text,
        'cuerpo' => $faker->paragraph,
        'user_id' => \App\User::all()->random()->id,
        'imagen' => \Faker\Provider\Image::image(storage_path() . '/app/public/posts', 600, 350, 'technics', false),
    ];
});
