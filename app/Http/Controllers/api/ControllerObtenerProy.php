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
       // return response()->json([
          //  'data' => $proyectos
        //], 200);
         // Retornar la vista con los proyectos
         return view('todosProyectos', compact('proyectos'));
    }

      // Método para mostrar el valor de la UF y todos los proyectos
      public function showUf()
      {
          $hoy = date("d-m-Y");
          $api = "https://mindicador.cl/api/uf/$hoy";
  
          if (ini_get('allow_url_fopen')) {
              $json = file_get_contents($api);
          } else {
              $curl = curl_init($api);
              curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
              $json = curl_exec($curl);
              curl_close($curl);
          }
  
          $data = json_decode($json, true);  
          $ufValue = $data['serie'][0]['valor'] ?? null;
  
          // Obtener todos los proyectos
          $proyectos = CrearProyectos::all();
  
          // Retornar la vista con el valor de la UF y los proyectos
          return view('todosProyectos', compact('ufValue', 'proyectos'));
}
}