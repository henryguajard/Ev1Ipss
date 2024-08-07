@extends('layouts.app')

@section('title', 'Crear Proyecto')

@section('content')
    <h1 class="mb-4">Crear Proyecto</h1>

    <form action="{{ url('/crearProyect') }}" method="POST" class="mb-4">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_de_inicio">Fecha de Inicio:</label>
            <input type="date" id="fecha_de_inicio" name="fecha_de_inicio" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" class="form-control" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="responsable">Responsable:</label>
            <input type="text" id="responsable" name="responsable" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="monto">Monto:</label>
            <input type="number" id="monto" name="monto" step="0.01" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Crear Proyecto</button>
    </form>

    <a href="{{ url('/proyectos') }}" class="btn btn-secondary">Volver a la lista de proyectos</a>
@endsection