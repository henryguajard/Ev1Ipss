@extends('layouts.app')

@section('title', 'Eliminar Proyecto')

@section('content')
    <h1 class="mb-4">Eliminar Proyecto</h1>

    @if ($proyecto)
        <div class="alert alert-warning" role="alert">
            <p>¿Estás seguro de que deseas eliminar el proyecto <strong>{{ $proyecto->nombre }}</strong>?</p>
            <p>Esta acción no se puede deshacer.</p>
        </div>

        <form action="{{ url('/proyectos/' . $proyecto->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar Proyecto</button>
            <a href="{{ url('/proyectos') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    @else
        <div class="alert alert-danger" role="alert">
            El proyecto que buscas no existe.
        </div>
        <a href="{{ url('/proyectos') }}" class="btn btn-secondary">Volver a la lista de proyectos</a>
    @endif
@endsection
// corregir al no encontrar un id por proyecto no aparece 'el proyecto no existe'
// solo me redirige a los proyectos