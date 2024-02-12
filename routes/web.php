<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlayerController;
use App\Models\Game;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class);

//Route::resource('/teams', TeamController::class);// Esto crea todas las rutas de forma automática.
// ruta para listar los equipos
Route::get('teams', [TeamController::class, 'index']);
// ruta para crear un nuevo equipo
Route::get('teams/create', [TeamController::class, 'create']);
// ruta para guardar un nuevo equipo
Route::post('teams', [TeamController::class, 'store']);
// ruta para mostrar un equipo específico
Route::get('teams/{team}', [TeamController::class, 'show']);
// ruta para editar un equipo existente
Route::get('teams/{team}/edit', [TeamController::class, 'edit']);
// ruta para actualiza un equipo existente
Route::put('teams/{team}', [TeamController::class, 'update']);
// ruta para eliminar un equipo existente
Route::delete('teams/{team}', [TeamController::class, 'destroy']);

// ruta para listar los partidos
Route::get('games', [GameController::class, 'index']);
// ruta para crear un nuevo equipo
Route::get('games/create', [GameController::class, 'create']);
