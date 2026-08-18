<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;
use App\Http\Controllers\AuthController;

Route::get('/registro', [AuthController::class, 'showRegister'])->name('auth.showRegister');
Route::post('/registro', [AuthController::class, 'register'])->name('auth.register');

Route::get('/login', [AuthController::class, 'showLogin'])->name('auth.showLogin');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/', [ProyectosController::class, 'index'])->name('proyectos.index');

Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos.index');

Route::get('/lista', [ProyectosController::class, 'lista'])->name('proyectos.lista');

Route::get('/lista/{id}', [ProyectosController::class, 'proyecto'])->name('proyectos.proyecto');

#RUTAS QUE NECESITAN ESTAR LOGUEADO
Route::middleware('jwt.auth')->group(function () {
    Route::get('/crear', [ProyectosController::class, 'crear'])->name('proyectos.crear');
    Route::post('/proyectos', [ProyectosController::class, 'creaProyectos'])->name('proyectos.creaProyectos');

    Route::get('/actualizar/{id}', [ProyectosController::class, 'actualizar'])->name('proyectos.actualizar');
    Route::put('/actualizar/{proyecto}', [ProyectosController::class, 'actualizarProyectos'])->name('proyectos.actualizarProyectos');

    Route::get('/borrar/{id}', [ProyectosController::class, 'borrar'])->name('proyectos.borrar');
    Route::delete('/lista/{id}', [ProyectosController::class, 'borrarProyectos'])->name('proyectos.borrarProyectos');
});
