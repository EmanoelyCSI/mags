<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\PostoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// ------------------------ USUÁRIOS ------------------------
Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

// ------------------------ CONTRATOS ------------------------
Route::get('/contrato', [ContratoController::class, 'index'])->name('contrato.index');

Route::get('/contrato/create', [ContratoController::class, 'create'])->name('contrato.create');
Route::post('/contrato/create', [ContratoController::class, 'store'])->name('contrato.store');

Route::get('/contrato/{id}', [ContratoController::class, 'show'])->name('contrato.show');

Route::get('/contrato/{id}/edit', [ContratoController::class, 'edit'])->name('contrato.edit');
Route::put('/contrato/{id}', [ContratoController::class, 'update'])->name('contrato.update');

Route::delete('/contrato/{id}', [ContratoController::class, 'destroy'])->name('contrato.destroy');

// ------------------------ POSTOS ------------------------
Route::get('/posto', [PostoController::class, 'index'])->name('posto.index');

Route::get('/posto/create', [PostoController::class, 'create'])->name('posto.create');
Route::post('/posto/create', [PostoController::class, 'store'])->name('posto.store');

Route::get('/posto/{id}', [PostoController::class, 'show'])->name('posto.show');

Route::get('/posto/{id}/edit', [PostoController::class, 'edit'])->name('posto.edit');
Route::put('/posto/{id}', [PostoController::class, 'update'])->name('posto.update');

Route::delete('/posto/{id}', [PostoController::class, 'destroy'])->name('posto.destroy');
