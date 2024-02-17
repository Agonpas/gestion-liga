<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    Route::get('/', HomeController::class);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
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
// ruta para crear un nuevo partido
Route::get('games/create', [GameController::class, 'create']);
// ruta para guardar un nuevo partido
Route::post('games', [GameController::class, 'store']);
// ruta para mostrar un partido específico
Route::get('games/{game}', [GameController::class, 'show']);
// ruta para editar un partido existente
Route::get('games/{game}/edit', [GameController::class, 'edit']);
// ruta para actualizar un partido existente
Route::put('games/{game}', [GameController::class, 'update'])->name('games.update');
// ruta para eliminar un equipo existente
Route::delete('games/{game}', [GameController::class, 'destroy']);
