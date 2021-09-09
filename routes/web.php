<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContratoController;


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
Route::get('/user', [UserController::class, 'index'])->name('dashboard.index');

Route::get('/user/{id}', [UserController::class, 'show'])->name('dashboard.show');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('dashboard.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('dashboard.update');

Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('dashboard.destroy');

// ------------------------ CONTRATOS ------------------------
Route::get('/contrato', [ContratoController::class, 'index'])->name('contrato.index');

Route::get('/contrato/create', [ContratoController::class, 'create'])->name('contrato.create');
Route::post('/contrato/create', [ContratoController::class, 'store'])->name('contrato.store');

Route::get('/contrato/{id}', [ContratoController::class, 'show'])->name('contrato.show');

Route::get('/contrato/{id}/edit', [ContratoController::class, 'edit'])->name('contrato.edit');
Route::put('/contrato/{id}', [ContratoController::class, 'update'])->name('contrato.update');

Route::delete('/contrato/{id}', [ContratoController::class, 'destroy'])->name('contrato.destroy');