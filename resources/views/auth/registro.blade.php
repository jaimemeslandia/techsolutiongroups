<x-layout>
    <form action="{{ route('auth.register') }}" method="POST" class="bg-white shadow-md rounded-xl p-8
    flex flex-col gap-4 max-w-lg mx-auto">
    @csrf
    <h2 class="text-2xl font-bold mb-4 text-slate-800">Crea tu cuenta</h2>

    @error('Correo')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

    <div>
        <label for="Nombre" class="block text-sm font-semibold text-slate-700">Nombre:</label>
        <input
            type="text"
            id="Nombre"
            name="Nombre"
            value="{{ old('Nombre') }}"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>
    <div>
        <label for="Correo" class="block text-sm font-semibold text-slate-700">Correo:</label>
        <input
            type="email"
            id="Correo"
            name="Correo"
            value="{{ old('Correo') }}"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>
    <div>
        <label for="Clave" class="block text-sm font-semibold text-slate-700">Clave (minimo 8 caracteres):</label>
        <input
            type="password"
            id="Clave"
            name="Clave"
            minlength="8"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>
    <div>
        <label for="Clave_confirmation" class="block text-sm font-semibold text-slate-700">Repite la clave:</label>
        <input
            type="password"
            id="Clave_confirmation"
            name="Clave_confirmation"
            minlength="8"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>
    <button type="submit" class="text-white px-4 py-2 mt-4 rounded-md font-medium transition
    bg-linear-to-tr from-yellow-400 to-red-500
    hover:from-yellow-500 hover:to-red-600">Registrarme</button>

    <p class="text-sm text-slate-600 text-center">
        {{-- TODO: la ruta con nombre auth.showLogin todavia no existe, se agrega en el siguiente paso (login) --}}
        Ya tienes cuenta? <a href="/login" class="text-blue-600 hover:underline">Inicia sesion</a>
    </p>
    </form>
</x-layout>
