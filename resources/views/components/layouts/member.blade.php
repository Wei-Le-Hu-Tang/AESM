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
<body class="bg-gray-50 text-gray-900">
    <nav class="bg-blue-600 text-white shadow-md p-4 flex justify-between items-center">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('img/logo.jpg') }}" alt="AESM" class="h-10 w-auto">
        </a>
        <div x-data="{ open: false }" class="relative">
            <button @click="open = !open" class="focus:outline-none">
                {{ auth()->user()->name }}
            </button>
            {{-- <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white text-black rounded shadow-md py-2">
                <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                </form>
            </div> --}}
        </div>
    </nav>

    <main class="container mx-auto py-8">
        {{ $slot }}
    </main>

    <footer class="bg-white text-center py-4 shadow-inner mt-8">
        &copy; {{ date('Y') }} AESM Asociación del Estudiante Sudcaliforniano en México. Todos los derechos reservados.
    </footer>
</body>
</html>