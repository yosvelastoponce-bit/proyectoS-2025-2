<?php

namespace App\Http\Controllers\Estudiantes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estudiante;
class EstudiantesContoller extends Controller
{
    public function index(Request $request){
    
        $estudiantes=Estudiante::get();
        return view('estudiantes.index', compact('estudiantes'));
    }
}
