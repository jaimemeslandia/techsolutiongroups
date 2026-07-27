
<div class="flex gap-3 mt-4">
    <ul>
        <li>
            <a href="{{route("proyectos.actualizar", $attributes->get('id'))}}" 
                class="inline-block px-3 py-2 rounded-md
                text-sm font-medium text-white transition bg-linear-to-tr
                 from-yellow-500 to-red-500 hover:to-red-600">
                Actualizar proyecto!
                </a>
        </li>

        <li>
            <a href="{{route("proyectos.borrar", $attributes->get('id'))}}" 
                class="inline-block px-3 py-2 rounded-md
                text-sm font-medium text-white transition bg-linear-to-tr
                 from-red-600 to-red-900 hover:to-red-700">
                Borrar Proyecto!
            </a>
        </li>
    </ul>
</div>