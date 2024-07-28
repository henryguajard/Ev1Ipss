<?php
namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CrearProyectos;

class ControllerEliminarProy extends Controller
{
    // Método para mostrar la vista de confirmación de eliminación
    public function confirmDelete($id)
    {
        // Buscar el proyecto por ID
        $proyecto = CrearProyectos::find($id);

        // Verificar si el proyecto existe
        if (!$proyecto) {
            return redirect('/proyectos')->with('error', 'Proyecto no encontrado');
        }

        // Retornar la vista de confirmación
        return view('eliminarProyectId', compact('proyecto'));
    }

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
        return redirect('/proyectos')->with('success', 'Proyecto eliminado exitosamente');
    }
}
