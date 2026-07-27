<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;

Route::get('/', [ProyectosController::class, 'index'])->name('proyectos.index');

Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos.index');

Route::get('/crear', [ProyectosController::class, 'crear'])->name('proyectos.crear');

Route::get('/actualizar/{id}', [ProyectosController::class, 'actualizar'])->name('proyectos.actualizar');

Route::get('/borrar/{id}', [ProyectosController::class, 'borrar'])->name('proyectos.borrar');

Route::get('/lista', [ProyectosController::class, 'lista'])->name('proyectos.lista');

Route::get('/lista/{id}', [ProyectosController::class, 'proyecto'])->name('proyectos.proyecto');

Route::post('/proyectos', [ProyectosController::class, 'creaProyectos'])->name('proyectos.creaProyectos');

Route::delete('/lista/{id}', [ProyectosController::class, 'borrarProyectos'])->name('proyectos.borrarProyectos');

Route::put('/actualizar/{proyecto}', [ProyectosController::class, 'actualizarProyectos'])->name('proyectos.actualizarProyectos');





