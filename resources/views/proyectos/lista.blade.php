<x-layout>
    <h2 class="text-2xl font-bold mb-6">Lista de Proyectos</h2>

<ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-3">
    @foreach($proyectos as $proyecto)
        <li>
            <x-card href="{{route('proyectos.proyecto', $proyecto->id)}}">

            <h3 class="text-lg font-semibold">{{ $proyecto->Nombre}}</h3>

            </x-card>
        </li>
    @endforeach
</ul>
<div class="mt-6">
    {{ $proyectos->links() }}
</div>
</x-layout>