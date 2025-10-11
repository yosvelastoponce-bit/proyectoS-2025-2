<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;
use App\Models\Administrador;
use App\Http\Controllers\Estudiantes\EstudiantesContoller;
use App\Http\Controllers\Administrador\AdministradorController;

Route::get('/', function () {

   /*$administrador=new Administrador();
    $administrador->nombre="Luiz";
    $administrador->save();

    return $administrador;*/
    //return 'Aqui trabajare con la tabla estudiantes';
    return view('welcome');
});

Route::get('/greeting', function (){
    return "Hello world";
});

Route::get('/saludos', function (){
    return "Hola de nuevo";
})->name('saluditos');

Route::get('/bienvenidos', function (){
    return view("bienvenidos");
})->name('bienvenidos');

Route::get('/ejemplo', function (){
    return view("ejemplo1");
})->name('ejemplos');

/*
Route::get('/estudiantes', function (){
    return View::make("estudiantes");
})->name('estudiantes');
*/

Route::get('/estudiantes/index', [EstudiantesContoller::class, 'index'])->name('estudiantes.index');

Route::get('/administrador/index', [AdministradorController::class, 'index'])->name('administrador.index');