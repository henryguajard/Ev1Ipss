<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
</head>
<body>
    <h1>Crear Proyecto</h1>
    <form action="{{ url('/crearProyect') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="fecha_de_inicio">Fecha de Inicio:</label>
            <input type="date" id="fecha_de_inicio" name="fecha_de_inicio" required>
        </div>
        <div>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado" required>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>
        <div>
            <label for="responsable">Responsable:</label>
            <input type="text" id="responsable" name="responsable" required>
        </div>
        <div>
            <label for="monto">Monto:</label>
            <input type="number" id="monto" name="monto" step="0.01" required>
        </div>
        <button type="submit">Crear Proyecto</button>
    </form>
</body>
</html>