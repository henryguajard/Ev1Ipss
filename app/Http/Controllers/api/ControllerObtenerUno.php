<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CrearProyectos;
use Illuminate\Http\Request;

class ControllerObtenerUno extends Controller
{
    //
    // Método para obtener un proyecto por ID
    public function show($id)
    {
        // Buscar el proyecto por ID
        $proyecto = CrearProyectos::find($id);

        // Verificar si el proyecto existe
        if (!$proyecto) {
            return response()->json([
                'message' => 'Proyecto no encontrado'
            ], 404);
        }

        // Retornar el proyecto
        return response()->json([
            'data' => $proyecto
        ], 200);
    }
}
