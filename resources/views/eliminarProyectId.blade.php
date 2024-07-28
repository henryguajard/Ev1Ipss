<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Proyecto</title>
</head>
<body>
    <h1>Eliminar Proyecto</h1>

    <form action="{{ url('/proyectos/' . $proyecto->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <p>¿Estás seguro de que deseas eliminar el proyecto <strong>{{ $proyecto->nombre }}</strong>?</p>
        
        <button type="submit">Eliminar</button>
        <a href="{{ url('/proyectos') }}">Cancelar</a>
    </form>
</body>
</html>