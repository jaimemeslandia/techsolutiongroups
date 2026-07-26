<x-layout>
    <h2>Lista de Proyectos</h2>

<ul>
    @foreach($proyectos as $proyecto)
        <li>
            <x-card href="{{route('proyectos.proyecto', $proyecto->id)}}">

            <h3>{{ $proyecto->Nombre}}</h3>

            </x-card>
        </li>
    @endforeach
</ul>
{{ $proyectos->links() }}
</x-layout>