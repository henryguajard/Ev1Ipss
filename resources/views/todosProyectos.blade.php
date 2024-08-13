@extends('layouts.app')

@section('title', 'Todos los Proyectos')

@section('content')
    <h1 class="mb-4">Lista de Proyectos</h1>
    <h2 class="mb-3">Valor de la UF</h2>
    @if(isset($ufValue))
        <p>El valor de la UF hoy es: {{ $ufValue }}</p>
    @else
        <p>No se pudo obtener el valor de la UF.</p>
    @endif

    @if ($proyectos->isEmpty())
        <p>No hay proyectos disponibles.</p>
    @else
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Fecha de Inicio</th>
                    <th>Estado</th>
                    <th>Responsable</th>
                    <th>Monto</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proyectos as $proyecto)
                    <tr>
                        <td>{{ $proyecto->id }}</td>
                        <td>{{ $proyecto->nombre }}</td>
                        <td>{{ $proyecto->fecha_de_inicio }}</td>
                        <td>{{ $proyecto->estado ? 'Activo' : 'Inactivo' }}</td>
                        <td>{{ $proyecto->responsable }}</td>
                        <td>${{ number_format($proyecto->monto, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection

@section('content')
    <h1 class="mb-4">Lista de Proyectos</h1>

    @foreach ($proyectos as $proyecto)
        <div class="project-item mb-3">
            <h2>{{ $proyecto->nombre }}</h2>
            <!-- Enlace para confirmar la eliminación -->
            <a href="{{ url('/eliminarProyectId/' . $proyecto->id . '/confirmDelete') }}" class="btn btn-warning">Eliminar Proyecto</a>
        </div>
    @endforeach
@endsection

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

