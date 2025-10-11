<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function index(Request $request){
        $administrador= Administrador::get();
        return view('administrador.index', compact('administrador'));
    }
}
