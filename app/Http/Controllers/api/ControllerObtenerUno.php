<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CrearProyectos;

class ControllerObtenerUno extends Controller
{
    // Método para obtener un proyecto por ID
    public function show($id)
    {
        // Buscar el proyecto por ID
        $proyecto = CrearProyectos::find($id);

        // Retornar la vista con el proyecto o null
        return view('verProyectoId', compact('proyecto'));
    }
}