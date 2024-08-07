@extends('layouts.app')

@section('title', 'Ver Proyecto')

@section('content')
    <h1 class="mb-4">Detalles del Proyecto</h1>

    @if ($proyecto)
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>ID:</strong> {{ $proyecto->id }}</li>
            <li class="list-group-item"><strong>Nombre:</strong> {{ $proyecto->nombre }}</li>
            <li class="list-group-item"><strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_de_inicio }}</li>
            <li class="list-group-item"><strong>Estado:</strong> {{ $proyecto->estado ? 'Activo' : 'Inactivo' }}</li>
            <li class="list-group-item"><strong>Responsable:</strong> {{ $proyecto->responsable }}</li>
            <li class="list-group-item"><strong>Monto:</strong> ${{ number_format($proyecto->monto, 2) }}</li>
        </ul>
    @else
        <div class="alert alert-danger" role="alert">
            El proyecto que buscas no existe.
        </div>
    @endif

    <a href="{{ url('/proyectos') }}" class="btn btn-secondary">Volver a la lista de proyectos</a>
@endsection