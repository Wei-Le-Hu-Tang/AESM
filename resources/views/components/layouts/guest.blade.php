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
                <li><a href="instalaciones">Instalaciones</a></li>
                <li><a href="eventos">Eventos</a></li>
                <li><a href="historia">Historia</a></li>
                <li><a href="galeria">Galería</a></li>
                <li><a href="#footer">Contáctanos</a></li>
            </ul>
            {{-- <div class="space-x-4">
                <a href="{{ route('login') }}" class="hover:text-blue-600">Login</a>
            </div> --}}
        </nav>

        <main class="container mx-auto py-8">
            {{ $slot }}
        </main>

        <footer id="footer">
            <div class="flex flex-row justify-evenly">
                <div>
                    <h3>Contactos</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/AESMBCS" class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.675 0h-21.35C.595 0 0 .595 0 1.326v21.348C0 23.404.595 24 1.326 24H12.82V14.706h-3.13v-3.622h3.13V8.413c0-3.1 1.893-4.788 4.66-4.788 1.325 0 2.464.098 2.795.142v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.764v2.312h3.587l-.467 3.622h-3.12V24h6.116c.73 0 1.324-.596 1.324-1.326V1.326C24 .595 23.404 0 22.675 0z"/>
                            </svg>
                            <span>Asociación de Estudiantes Sudcalifornianos en México</span>
                        </a></li>
                        <li><a href="https://www.instagram.com/aesmbcs" class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.337 3.608 1.312.975.975 1.25 2.242 1.312 3.608.058 1.266.069 1.646.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.337 2.633-1.312 3.608-.975.975-2.242 1.25-3.608 1.312-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.337-3.608-1.312-.975-.975-1.25-2.242-1.312-3.608-.058-1.266-.069-1.646-.069-4.85s.012-3.584.07-4.85c.062-1.366.337-2.633 1.312-3.608.975-.975 2.242-1.25 3.608-1.312C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.736 0 8.332.014 7.052.072 5.777.13 4.583.414 3.513 1.484 2.443 2.554 2.159 3.748 2.101 5.023.014 8.332 0 8.736 0 12s.014 3.668.072 4.948c.058 1.275.342 2.469 1.412 3.539 1.07 1.07 2.264 1.354 3.539 1.412C8.332 23.986 8.736 24 12 24s3.668-.014 4.948-.072c1.275-.058 2.469-.342 3.539-1.412 1.07-1.07 1.354-2.264 1.412-3.539C23.986 15.668 24 15.264 24 12s-.014-3.668-.072-4.948c-.058-1.275-.342-2.469-1.412-3.539C21.446.414 20.252.13 18.977.072 17.668.014 17.264 0 12 0z"/>
                                <path d="M12 5.838a6.162 6.162 0 1 0 6.162 6.162A6.169 6.169 0 0 0 12 5.838zm0 10.162a3.999 3.999 0 1 1 3.999-3.999A4.004 4.004 0 0 1 12 16z"/>
                                <circle cx="18.406" cy="5.594" r="1.44"/>
                            </svg>
                            <span>@aesmbcs</span>
                        </a></li>
                        <li><a href="mailto:estudiantil.aesm@gmail.com" class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 13.065L.001 4.5V20h23.998V4.5L12 13.065zm0-2.13l11.998-8.936H.002L12 10.935z"/>
                            </svg>
                            <span>estudiantil.aesm@gmail.com</span>
                        </a></li>
                    </ul>
                </div>
                <div>
                    <h3>Dirección</h3>
                    <ul>
                        <li><a href="https://maps.app.goo.gl/FLUN1n7BGkL5qD5o8" class="flex flex-row">
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                <path d="M0 0h24v24H0z" fill="none"/>
                            </svg>
                            <span>Calzada de La Viga #1448, Mexico City, Mexico CP. 09400</span>
                        </a></li>
                        <div id="googleMap" style="width:100%;height:200px; border-radius:1rem;"></div>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                &copy; {{ date('Y') }} AESM Asociación del Estudiante Sudcaliforniano en México. Todos los derechos reservados.
            </div>
        </footer>
    </div>

    <script>
        function myMap() {
        var mapProp= {
        center:new google.maps.LatLng(19.37121063554629, -99.12217209807808),
        zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</body>
</html>