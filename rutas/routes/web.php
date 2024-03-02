<?php

use Illuminate\Support\Facades\Route;

//- Importación de los controlladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

//Rutas por método
/* Route::get('curso', [CursoController::class, 'index']);
Route::get('curso/create', [CursoController::class, 'create']);
Route::get('curso/{curso}', [CursoController::class, 'show']); */


//Ruta por grupo

Route::controller(CursoController::class)->group(function () {
    //- Route::get('<Ruta>', '<Método>');
    Route::get('curso', 'index');
    Route::get('curso/create', 'create');
    Route::get('curso/{curso}', 'show');
});
