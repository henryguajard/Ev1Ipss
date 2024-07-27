<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\CrearProyectos;
use Illuminate\Http\Request;

class ControllerObtenerProy extends Controller
{
    //
    // Método para obtener todos los proyectos
    public function index()
    {
        // Obtener todos los proyectos
        $proyectos = CrearProyectos::all();

        // Retornar respuesta
        return response()->json([
            'data' => $proyectos
        ], 200);
    }
}
