<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title> <!-- Título dinámico -->
    <!-- plantilla base para todas las vistas -->
    <!-- Incluir Bootstrap desde un CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Incluir CSS adicional -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> <!-- Si tienes CSS personalizado -->
</head>
<body>
    <!-- Barra de navegación común -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Aplicación</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/proyectos">Proyectos</a>
                </li>
                <!-- Agrega más enlaces según tus necesidades -->
            </ul>
        </div>
    </nav>
    
    <div class="container mt-4">
        @yield('content') <!-- Contenido específico de cada página -->
    </div>
    
    <!-- Incluir los scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Incluir JavaScript adicional -->
    <script src="{{ asset('js/app.js') }}"></script> <!-- Si tienes JavaScript personalizado -->
</body>
</html>
