<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Proyecto</title>
</head>
<body>
    <h1>Actualizar Proyecto</h1>

    @if ($proyecto)
        <form action="{{ url('/proyectos/' . $proyecto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $proyecto->nombre) }}" required>
            </div>

            <div>
                <label for="fecha_de_inicio">Fecha de Inicio:</label>
                <input type="date" name="fecha_de_inicio" id="fecha_de_inicio" value="{{ old('fecha_de_inicio', $proyecto->fecha_de_inicio) }}" required>
            </div>

            <div>
                <label for="estado">Estado:</label>
                <select name="estado" id="estado">
                    <option value="1" {{ old('estado', $proyecto->estado) == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ old('estado', $proyecto->estado) == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
            </div>

            <div>
                <label for="responsable">Responsable:</label>
                <input type="text" name="responsable" id="responsable" value="{{ old('responsable', $proyecto->responsable) }}" required>
            </div>

            <div>
                <label for="monto">Monto:</label>
                <input type="number" name="monto" id="monto" value="{{ old('monto', $proyecto->monto) }}" required>
            </div>

            <button type="submit">Actualizar Proyecto</button>
        </form>
    @else
        <p>El proyecto que buscas no existe.</p>
    @endif

    <a href="{{ url('/proyectos') }}">Volver a la lista de proyectos</a>
</body>
</html>