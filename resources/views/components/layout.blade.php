<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-state-100 text-gray-800 min-h-screen">
    @if(session('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
    
    <header>
        <nav>
            <div>
                <h1>Proyectos Ficticios! Eva 1</h1>
                <a href="{{ route('proyectos.index')}}">Inicio!</a>
                <a href="{{ route('proyectos.lista')}}">Todos los proyectos!</a>
                <a href="{{route('proyectos.crear')}}">Crea un proyecto!</a>
                <x-api-uf></x-api-uf>
            </div>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>