<?php

//lugar dónde se encuentra nuestro archivo
namespace App\Http\Controllers;

//Importación de la clase Request
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Método
    public function __invoke(){
        return "Hola desde el controlador Home Controller :D";
    }
}
