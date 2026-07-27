<x-layout>
    <h1>DETALLES DE UN PROYECTO</h1>
    <p>Nombre:{{$proyecto->Nombre}}---ID:{{$proyecto->id}}</p>
    <p>Fecha de inicio:{{$proyecto->Fecha_de_inicio}}</p>
    <p>Estado:{{$proyecto->Estado}}</p>
    <p>Responsable:{{$proyecto->Responsable}}</p>
    <p>Monto:{{$proyecto->Monto}}</p>
    <x-upd-delete id="{{$proyecto->id}}">
    </x-upd-delete>
</x-layout>