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
        Storage::deleteDirectory('post');
        Storage::deleteDirectory('contenidos');

        Storage::makeDirectory('post');
        Storage::makeDirectory('contenidos');

        factory(\App\Post::class, 20)->create();
        factory(\App\Contenido::class, 20)->create();
    }
}
