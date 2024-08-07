@extends('layouts.app')

@section('title', 'Actualizar Proyecto')

@section('content')
    <h1 class="mb-4">Actualizar Proyecto</h1>

    @if ($proyecto)
        <form action="{{ url('/proyectos/' . $proyecto->id) }}" method="POST" class="mb-4">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $proyecto->nombre) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="fecha_de_inicio">Fecha de Inicio:</label>
                <input type="date" name="fecha_de_inicio" id="fecha_de_inicio" value="{{ old('fecha_de_inicio', $proyecto->fecha_de_inicio) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="1" {{ old('estado', $proyecto->estado) == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ old('estado', $proyecto->estado) == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="responsable">Responsable:</label>
                <input type="text" name="responsable" id="responsable" value="{{ old('responsable', $proyecto->responsable) }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="number" name="monto" id="monto" value="{{ old('monto', $proyecto->monto) }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Proyecto</button>
        </form>
    @else
        <div class="alert alert-danger" role="alert">
            El proyecto que buscas no existe.
        </div>
    @endif

    <a href="{{ url('/proyectos') }}" class="btn btn-secondary">Volver a la lista de proyectos</a>
@endsection