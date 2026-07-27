<x-layout>
    <form action="{{route('proyectos.creaProyectos')}}" method="POST">
    @csrf
    <h2>Crea Tu Proyecto!</h2>

    <div>
        <label for="Nombre">Nombre del Proyecto:</label>
        <input 
            type="text" 
            id="Nombre" 
            name="Nombre" 
            required
        >
    </div>

    <div>
        <label for="Fecha_de_inicio">Fecha de Inicio:</label>
        <input 
            type="date" 
            id="Fecha_de_inicio" 
            name="Fecha_de_inicio" 
            required
        >
    </div>
    <div>
        <label for="Estado">Estado del Proyecto:</label>
        <input 
            type="text" 
            id="Estado" 
            name="Estado" 
            required
        >
    </div>
    <div>
        <label for="Responsable">Responsable del Proyecto:</label>
        <input 
            type="text" 
            id="Responsable" 
            name="Responsable" 
            required
        >
    </div>
    <div>
        <label for="Monto">Monto del Proyecto:</label>
        <input 
            type="number" 
            id="Monto" 
            name="Monto" 
            required
        >
    </div>
    <button type="submit">Crear Proyecto</button>
    </form>
</x-layout>