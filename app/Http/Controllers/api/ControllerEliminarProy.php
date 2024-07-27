<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CrearProyectos;
use Illuminate\Http\Request;

class ControllerEliminarProy extends Controller
{
    //
    // Método para eliminar un proyecto por ID
    public function destroy($id)
    {
        // Buscar el proyecto por ID
        $proyecto = CrearProyectos::find($id);

        // Verificar si el proyecto existe
        if (!$proyecto) {
            return response()->json([
                'message' => 'Proyecto no encontrado'
            ], 404);
        }

        // Eliminar el proyecto
        $proyecto->delete();

        // Retornar respuesta
        return response()->json([
            'message' => 'Proyecto eliminado exitosamente'
        ], 200);
    }
}
