<x-layout>
    <h1>BORRAR</h1>
    <h3>Se borrara el siguiente proyecto</h3>
    <p>Nombre:{{$proyecto->Nombre}}--Responsable:{{$proyecto->Responsable}}--ID:{{$proyecto->id}}</p>

    <form action="{{route('proyectos.borrarProyectos', $proyecto->id)}}" method="POST">
        @csrf
        @method('DELETE')

    <button type="submit">DESTRUIR!</button>
    </form>
</x-layout>