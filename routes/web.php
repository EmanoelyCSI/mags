<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
