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

Route::view('/','home')->name('home');
Route::view('about','about')->name('about');
Route::view('contact','contact')->name('contact');
Route::get('contenido/{contenido}','ContenidoController@show')->name('contenido.show');
Route::get('post/{post}','PostController@show')->name('post.show');