<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Método index
    public function index()
    {
        return view('cursos.index');
    }

    //Método para crear
    public function create()
    {
        return view('cursos.create');
    }

    //Método para mostrar
    public function show($curso)
    {
        return view('cursos.show', ['curso' => $curso]);
    }
}
