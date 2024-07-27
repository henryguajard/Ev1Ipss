<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CrearProyectos;
use Illuminate\Http\Request;

class ControllerActualizProy extends Controller
{
    //
    // Método para actualizar un proyecto por ID
    public function update(Request $request, $id)
    {
        // Validar la solicitud
        $validatedData = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'fecha_de_inicio' => 'sometimes|required|date',
            'estado' => 'sometimes|required|boolean',
            'responsable' => 'sometimes|required|string|max:255',
            'monto' => 'sometimes|required|integer',
        ]);

        // Buscar el proyecto por ID
        $proyecto = CrearProyectos::find($id);

        // Verificar si el proyecto existe
        if (!$proyecto) {
            return response()->json([
                'message' => 'Proyecto no encontrado'
            ], 404);
        }

        // Actualizar el proyecto
        $proyecto->update($validatedData);

        // Retornar respuesta
        return response()->json([
            'message' => 'Proyecto actualizado exitosamente',
            'data' => $proyecto
        ], 200);
    }
}
