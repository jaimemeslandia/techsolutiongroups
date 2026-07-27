<x-layout>
    <div class="bg-white shadow-md rounded-xl p-8 text-center max-w-lg mx-auto flex flex-col gap-4">
        <h1 class="text-2xl text-slate-600 font-bold mb-4">Detalles de un proyecto</h1>
        <p class="text-slate-600 mb-2">Nombre: <span class="font-medium">{{$proyecto->Nombre}}</span></p>
        <p class="text-slate-600 mb-2">ID: <span class="font-medium">{{$proyecto->id}}</span></p>
        <p class="text-slate-600 mb-2">Fecha de inicio: <span class="font-medium">{{$proyecto->Fecha_de_inicio}}</span></p>
        <p class="text-slate-600 mb-2">Estado: <span class="font-medium">{{$proyecto->Estado}}</span></p>
        <p class="text-slate-600 mb-2">Responsable: <span class="font-medium">{{$proyecto->Responsable}}</span></p>
        <p class="text-slate-600 mb-4">Monto: $<span class="font-medium">{{$proyecto->Monto}}</span></p>
        <x-upd-delete id="{{$proyecto->id}}">
        </x-upd-delete>
    </div>
</x-layout>