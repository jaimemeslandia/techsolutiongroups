<x-layout>
    <h1>DETALLES DE UN PROYECTO</h1>
    <p>Nombre:{{$proyecto->Nombre}}---ID:{{$proyecto->id}}</p>
    <x-upd-delete id="{{$proyecto->id}}">
    </x-upd-delete>
</x-layout>