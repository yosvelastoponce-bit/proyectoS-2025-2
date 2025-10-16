<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;
use App\Models\Administrador;
use App\Http\Controllers\Estudiantes\EstudiantesContoller;
use App\Http\Controllers\Administrador\AdministradorController;

Route::get('/', function () {
/*
    $estudiante=new Estudiante();
    $estudiante->codigo="PANRG";
    $estudiante->nombre="Yosvel";
    $estudiante->pri_ape="Asto";
    $estudiante->seg_ape="Ponce";
    $estudiante->dni="645123";
    $estudiante->save();

    return $estudiante;*/
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
Route::get('/estudiantes/console', [EstudiantesContoller::class, 'console'])->name('estudiantes.console');

Route::get('/administrador/index', [AdministradorController::class, 'index'])->name('administrador.index');