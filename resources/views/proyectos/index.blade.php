<x-layout>
    <div class="bg-white shadow-md rounded-xl p-8 text-center">
        <h1 class="text-2xl font-bold mb-4">TechSolution Group - Gestion de proyectos</h1>
        <p class="text-slate-600 mb-6">
        Bienvenido! En esta pestaña puedes crear, ver, 
        actualizar y eliminar proyectos.
        </p>
        <a href="{{route('proyectos.lista')}}" class="inline-block px-4 py-2 transition bg-linear-to-tr
         from-yellow-400 to-red-500 hover:from-yellow-500 hover:to-red-600 rounded-md text-white font-medium text-2xl ">
        Ver todos los proyectos
        </a>
    </div>
</x-layout>