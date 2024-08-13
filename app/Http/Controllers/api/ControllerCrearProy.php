<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CrearProyectos;

class ControllerCrearProy extends Controller
{
    // Método para crear un nuevo proyecto
    public function store(Request $request)
    {
        // Validar la solicitud
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_de_inicio' => 'required|date', // Cambia 'fecha de inicio' a 'fecha_de_inicio'
            'estado' => 'required|boolean', 
            'responsable' => 'required|string|max:255',
            'monto' => 'required|numeric',
        ]);

        $proyecto = CrearProyectos::create($validatedData);

        // Retornar respuesta
       // return response()->json([
          //  'message' => 'Proyecto creado exitosamente',
          //  'data' => $proyecto
       // ], 201);

        // Redirigir a la lista de proyectos con un mensaje de éxito
        return redirect('/proyectos')->with('success', 'Proyecto creado exitosamente');
    }
}
