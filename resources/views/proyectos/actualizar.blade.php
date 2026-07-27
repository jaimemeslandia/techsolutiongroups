<x-layout>
    <form action="{{route('proyectos.actualizarProyectos',['proyecto' => $proyecto])}}" method="POST" 
    class="bg-white shadow-md rounded-xl p-8 flex flex-col gap-4 max-w-lg mx-auto">
    @csrf
    @method('PUT')
    <h1 class="text-2xl font-bold mb-6 text-slate-800 text-center">ACTUALIZAR PROYECTO</h1>

    <div>
        <label for="Nombre" class="text-sm font-semibold text-slate-700">Nombre del Proyecto:</label>
        <input 
            type="text" 
            id="Nombre" 
            name="Nombre" 
            value="{{$proyecto->Nombre}}"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>

    <div>
        <label for="Fecha_de_inicio" class="text-sm font-semibold text-slate-700">Fecha de Inicio:</label>
        <input 
            type="date" 
            id="Fecha_de_inicio" 
            name="Fecha_de_inicio" 
            value="{{$proyecto->Fecha_de_inicio}}"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>

    <div>
        <label for="Estado" class="text-sm font-semibold text-slate-700">Estado del Proyecto:</label>
        <input 
            type="text" 
            id="Estado" 
            name="Estado" 
            value="{{$proyecto->Estado}}"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>

    <div>
        <label for="Responsable" class="text-sm font-semibold text-slate-700">Responsable del Proyecto:</label>
        <input 
            type="text" 
            id="Responsable" 
            name="Responsable" 
            value="{{$proyecto->Responsable}}"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>

    <div>
        <label for="Monto" class="text-sm font-semibold text-slate-700">Monto del Proyecto:</label>
        <input 
            type="number" 
            id="Monto" 
            name="Monto"
            value="{{$proyecto->Monto}}"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>

    <button type="submit" class="text-white px-4 py-2 rounded-md font-medium transition 
    bg-linear-to-tr from-yellow-400 to-red-500 
    hover:from-yellow-500 hover:to-red-600">Actualizar Proyecto</button>


    </form>
</x-layout>