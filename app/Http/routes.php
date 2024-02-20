<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','ProyectosController@create');
//Route::get('/Proyectos/create', [ProyectosController::class],create)->name('Proyectos.create');
Route::get('/Proyectos',[ProyectosController::class,'store'])->name('Proyectos.store');

//Route::resource('Proyectos',ProyectosController::class);