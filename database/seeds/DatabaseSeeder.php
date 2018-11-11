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

        //Usurio admin
        factory(\App\User::class, 1)->create(['name' => 'Administrador del sistema','email' => 'admin@admin.com','role' => \App\User::ADMIN]);

        //Otros usuarios
        factory(\App\User::class, 10)->create();


        Storage::deleteDirectory('posts');
        Storage::deleteDirectory('contenidos');

        Storage::makeDirectory('posts');
        Storage::makeDirectory('contenidos');

//        factory(\App\Post::class, 30)->create();
//        factory(\App\Contenido::class, 30)->create();


    }
}
