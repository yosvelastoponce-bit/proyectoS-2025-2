<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Models\Estudiante;


Route::get('/', function () {

    $estudiante=new Estudiante();
    $estudiante->nombre="Luiz";
    $estudiante->pri_ape="Lopez";
    $estudiante->seg_ape="Perez";
    $estudiante->save();

    return $estudiante;
    //return 'Aqui trabajare con la tabla estudiantes';
    //return view('welcome');
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

Route::get('/estudiantes', function (){
    return View::make("estudiantes");
})->name('estudiantes');
