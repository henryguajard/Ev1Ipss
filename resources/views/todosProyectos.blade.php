<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los Proyectos</title>
</head>
<body>
    <h1>Lista de Proyectos</h1>

    <h2>Valor de la UF</h2>
    @if(isset($ufValue))
        <p>El valor de la UF hoy es: {{ $ufValue }}</p>
    @else
        <p>No se pudo obtener el valor de la UF.</p>
    @endif

    @if ($proyectos->isEmpty())
        <p>No hay proyectos disponibles.</p>
    @else
        <table border="1">
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
</body>
</html>