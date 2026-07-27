<x-layout>
    <h1>ACTUALIZAR</h1>
    <form action="{{route('proyectos.actualizarProyectos',['proyecto' => $proyecto])}}" method="POST">
    @csrf
    @method('PUT')

    <label for="Nombre">Nombre del Proyecto:</label>
    <input 
        type="text" 
        id="Nombre" 
        name="Nombre" 
        value="{{$proyecto->Nombre}}"
        required
    >

    <label for="Fecha_de_inicio">Fecha de Inicio:</label>
    <input 
        type="date" 
        id="Fecha_de_inicio" 
        name="Fecha_de_inicio" 
        value="{{$proyecto->Fecha_de_inicio}}"
        required
    >

    <label for="Estado">Estado del Proyecto:</label>
    <input 
            type="text" 
            id="Estado" 
            name="Estado" 
            value="{{$proyecto->Estado}}"
            required
    >

    <label for="Responsable">Responsable del Proyecto:</label>
    <input 
            type="text" 
            id="Responsable" 
            name="Responsable" 
            value="{{$proyecto->Responsable}}"
            required
    >

    <label for="Monto">Monto del Proyecto:</label>
    <input 
            type="number" 
            id="Monto" 
            name="Monto"
            value="{{$proyecto->Monto}}"
            required
    >

    
  <button type="submit">Actualizar Proyecto</button>

    
    </form>
</x-layout>