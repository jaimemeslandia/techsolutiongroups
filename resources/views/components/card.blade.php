<div class="bg-white border rounded-xl shadow-md p-4 hover:shadow-lg transition">
    {{ $slot }}
    <a href="{{ $attributes->get('href')}}" class="inline-block mt-2 text-sm font-medium text-orange-600 hover:text-red-700">Ver Detalles</a>
</div>