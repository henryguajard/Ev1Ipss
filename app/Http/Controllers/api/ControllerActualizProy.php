<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CrearProyectos;

class ControllerActualizProy extends Controller
{
    
    public function edit($id)
    {
        // Buscar el proyecto por ID
        $proyecto = CrearProyectos::find($id);

        
        if (!$proyecto) {
            return redirect('/proyectos')->with('error', 'Proyecto no encontrado');
        }

        
        return view('actualizProyectId', compact('proyecto'));
    }

    
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
        return redirect('/proyectos')->with('success', 'Proyecto actualizado exitosamente');
    }
}
