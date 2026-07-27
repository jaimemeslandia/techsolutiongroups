<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
     @vite('resources/css/app.css')
</head>
<body>
    @if(session('success'))
        <div>
            {{session('success')}}
        </div>
    @endif
    
    <header>
        <nav>
            <h1>Proyectos Ficticios! Eva 1</h1>
            <a href="{{ route('proyectos.index')}}">Inicio!</a>
            <a href="{{ route('proyectos.lista')}}">Todos los proyectos!</a>
            <a href="{{route('proyectos.crear')}}">Crea un proyecto!</a>
            <x-api-uf></x-api-uf>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>