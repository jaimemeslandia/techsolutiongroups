<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
     @vite('resources/css/app.css')
</head>
<body class="bg-slate-100 text-gray-800 min-h-screen">
    @if(session('success'))
        <div class="bg-green-100 text-green-800 text-center py-2 px-4 rounded-lg shadow-md">
            {{session('success')}}
        </div>
    @endif
    
    <header>
        <nav class="flex flex-wrap items-center justify-between gap-4 px-8 py-6">
            <h1 class="text-slate-800 text-lg font-bold">Proyectos Ficticios! Evaluacion 1!!!</h1>
            <div class="flex rounded-lg shadow-md text-center items-center justify-center gap-6 py-2 px-4 bg-linear-to-tr from-yellow-300 to-red-300">
                <a href="{{ route('proyectos.index')}}">Inicio!</a>
                <a href="{{ route('proyectos.lista')}}">Todos los proyectos!</a>
                <a href="{{route('proyectos.crear')}}">Crea un proyecto!</a>
                <x-api-uf></x-api-uf>
            </div>
        </nav>
    </header>

    <main class="container max-w-4xl mx-auto p-6">
        {{ $slot }}
    </main>

</body>
</html>