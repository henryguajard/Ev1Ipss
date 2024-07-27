<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ControllerCrearProy;
use App\Http\Controllers\api\ControllerObtenerProy;
use App\Http\Controllers\api\ControllerObtenerUno;
use App\Http\Controllers\api\ControllerActualizProy;
use App\Http\Controllers\api\ControllerEliminarProy;

Route::get('/proyectos', [ControllerObtenerProy::class, 'index']);//obtener todos

Route::get('/proyectos/{id}', [ControllerObtenerUno::class, 'show']);//obtener uno

Route::put('/proyectos/{id}', [ControllerActualizProy::class, 'update']);// modificar 

Route::post('/proyectos', [ControllerCrearProy::class, 'store']);// crear proyecto

Route::delete('/proyectos/{id}', [ControllerEliminarProy::class, 'destroy']);//eliminar proyecto
