<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrearProyectos extends Model
{
    use HasFactory;

    protected $table = 'proyectos'; 

    protected $fillable = [
        'nombre',
        'fecha_de_inicio', 
        'estado',
        'responsable',
        'monto'
    ];
}
