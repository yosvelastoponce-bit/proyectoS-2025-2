<?php

namespace App\Http\Controllers\Estudiantes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{redirect, View};
use App\Models\Estudiante;
class EstudiantesContoller extends Controller
{
    public function index(Request $request){
    
        $estudiantes = Estudiante::orderBy('id', "DESC")->get();

        return view('estudiantes.index', compact('estudiantes'));


    }

    public function create(){
        return View::make('estudiantes.create');
    }

    public function store(Request $request){
        $estudiante=Estudiante::create($request->all());
        return Redirect::to('/estudiantes/index');
    }

    public function edit($id){
        $estudiante=Estudiante::find($id);

        return $estudiante;
    }
}
