@extends('layouts.app')

@section('title', 'Ver Proyecto')

@section('content')
    <h1>Detalles del Proyecto</h1>

    @if ($proyecto)
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;"> <!-- Ajusta el ancho según lo necesario -->
            <div class="card-header">
                <h4>Proyecto ID: {{ $proyecto->id }}</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $proyecto->nombre }}</h5>
                <p class="card-text">
                    <strong>Fecha de Inicio:</strong> {{ $proyecto->fecha_de_inicio }}<br>
                    <strong>Estado:</strong> {{ $proyecto->estado ? 'Activo' : 'Inactivo' }}<br>
                    <strong>Responsable:</strong> {{ $proyecto->responsable }}<br>
                    <strong>Monto:</strong> ${{ number_format($proyecto->monto, 2) }}
                </p>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ url('/proyectos') }}" class="btn btn-primary">Volver a la lista de proyectos</a>
            </div>
        </div>
    </div>
@else
    <div class="alert alert-warning" role="alert">
        El proyecto que buscas no existe.
    </div>
@endif
@endsection