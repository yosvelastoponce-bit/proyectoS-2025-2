<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function (){
    return "Hello world";
});

Route::get('/saludos', function (){
    return "Hola de nuevo";
});

Route::get('/bienvenidos', function (){
    return view("bienvenidos");
});
