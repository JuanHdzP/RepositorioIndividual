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
/* Desde la vista principal*/
Route::get('/', function () {
    return view('welcome');
});

/* Desde la vista de una carpeta*/
Route::get('/usuario', function () {
    return view('usuarios/usuario');
});

/* Desde una funcion*/
Route::get('/funcion1', function () {
    return "Soy un Hola mundo desde una funcion";
});

/* Desde otra funcion*/
Route::get('/funcion2', function () {
    return "Soy un Hola mundo en otra funcion";
});

/* Ruta de blade*/
Route::get('/hola', function () {
    return view('child');
});

