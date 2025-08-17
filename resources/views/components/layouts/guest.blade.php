<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AESM</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('img/logo.jpg') }}" />
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <div class="wrapper">
        <nav>    
            <ul>
                <li><a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.jpg') }}" alt="AESM">
                </a></li>
                <li><a href="#">Instalaciones</a></li>
                <li><a href="#">Eventos</a></li>
                <li><a href="#">Historia</a></li>
                <li><a href="#">Galería</a></li>
                <li><a href="#">Contáctanos</a></li>
            </ul>
            {{-- <div class="space-x-4">
                <a href="{{ route('login') }}" class="hover:text-blue-600">Login</a>
            </div> --}}
        </nav>

        <main class="container mx-auto py-8">
            {{ $slot }}
        </main>

        <footer>
            &copy; {{ date('Y') }} AESM Asociación del Estudiante Sudcaliforniano en México. Todos los derechos reservados.
        </footer>
    </div>
</body>
</html>