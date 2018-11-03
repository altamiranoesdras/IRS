<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('posts');
        Storage::deleteDirectory('contenidos');

        Storage::makeDirectory('posts');
        Storage::makeDirectory('contenidos');

        factory(\App\Post::class, 10 )->create();
        factory(\App\Contenido::class, 10 )->create();
    }
}
