<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Mi Aplicación')</title> <!-- Título dinámico -->
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS personalizado (si tienes alguno) -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Ruta a tu CSS si existe -->
    
    @stack('styles') <!-- Para incluir estilos adicionales desde las vistas -->
</head>
<body>

    <!-- Barra de navegación (opcional) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Aplicación</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="btn btn-link nav-link" type="submit">Cerrar Sesión</button>
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido dinámico -->
    <div class="container mt-5">
        @yield('content') <!-- Aquí se cargará el contenido de cada vista -->
    </div>

    <!-- Footer (opcional) -->
    <footer class="bg-light text-center text-lg-start mt-auto py-3">
        <div class="container">
            <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <!-- jQuery (opcional si lo necesitas) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Scripts personalizados -->
    <script src="{{ asset('js/app.js') }}"></script> <!-- Si tienes scripts personalizados -->
    
    @stack('scripts') <!-- Para scripts adicionales desde vistas individuales -->
</body>
</html>
