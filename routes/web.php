<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ControllerCrearProy;
use App\Http\Controllers\api\ControllerObtenerProy;
use App\Http\Controllers\api\ControllerObtenerUno;
use App\Http\Controllers\api\ControllerEliminarProy;
use App\Http\Controllers\api\ControllerActualizProy;

// Ruta para mostrar el formulario de creación de proyecto
Route::get('/crearProyect', function () {
    return view('crearProyect');
});

Route::post('/crearProyect', [ControllerCrearProy::class, 'store']);
// Ruta para manejar la solicitud POST del formulario

Route::get('/proyectos', [ControllerObtenerProy::class, 'index']);//vista todos los proyectos

// Ruta para obtener un proyecto por ID
Route::get('/verProyectoId/{id}', [ControllerObtenerUno::class, 'show']);
//Route::post('/proyectos', [ControllerCrearProy::class, 'store']);

// Ruta para mostrar la vista de confirmación de eliminación
Route::get('/eliminarProyectId/{id}/confirmDelete', [ControllerEliminarProy::class, 'confirmDelete']);

// Ruta para eliminar el proyecto
Route::delete('/proyectos/{id}', [ControllerEliminarProy::class, 'destroy']);

// Ruta para mostrar la vista de actualización
Route::get('/actualizProyectId/{id}/edit', [ControllerActualizProy::class, 'edit']);

// Ruta para actualizar el proyecto
Route::put('/proyectos/{id}', [ControllerActualizProy::class, 'update']);

// Ruta para mostrar el valor de la UF y la lista de proyectos
Route::get('/proyectos', [ControllerObtenerProy::class, 'showUf']);