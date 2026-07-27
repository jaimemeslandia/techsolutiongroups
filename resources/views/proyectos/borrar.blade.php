<x-layout>
    <div class="bg-white shadow-md rounded-xl p-8 text-center max-w-lg mx-auto">
        <h1 class="text-2xl font-bold mb-4">BORRAR PROYECTO</h1>
        <h3 class="text-lg font-semibold mb-2">Se borrará el siguiente proyecto!!</h3>
        <p class="text-slate-600 font-medium mb-1">Nombre: <span class="text-slate-900 p-2">{{$proyecto->Nombre}}</span></p>
        <p class="text-slate-600 font-medium mb-1">Fecha de Inicio: <span class="text-slate-900 p-2">{{$proyecto->Fecha_de_inicio}}</span></p>
        <p class="text-slate-600 font-medium mb-1">Estado: <span class="text-slate-900 p-2">{{$proyecto->Estado}}</span></p>
        <p class="text-slate-600 font-medium mb-1">Responsable: <span class="text-slate-900 p-2">{{$proyecto->Responsable}}</span></p>
        <p class="text-slate-600 font-medium mb-1">Monto: <span class="text-slate-900 p-2">{{$proyecto->Monto}}</span></p>
        <p class="text-slate-600 font-medium mb-1">ID: <span class="text-slate-900 p-2">{{$proyecto->id}}</span></p>
    
    
        <form action="{{route('proyectos.borrarProyectos', $proyecto->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="text-white px-4 py-2 rounded-md font-medium transition 
            bg-linear-to-tr from-red-600 to-red-900 
            hover:from-red-700 hover:to-red-900">DESTRUIR!</button>
        </form>
    </div>
</x-layout>