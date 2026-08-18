<x-layout>
    <form action="{{ route('auth.login') }}" method="POST" class="bg-white shadow-md rounded-xl p-8
    flex flex-col gap-4 max-w-lg mx-auto">
    @csrf
    <h2 class="text-2xl font-bold mb-4 text-slate-800">Inicia sesion</h2>

    @error('Correo')
        <p class="text-red-600 text-sm">{{ $message }}</p>
    @enderror

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
        <label for="Clave" class="block text-sm font-semibold text-slate-700">Clave:</label>
        <input
            type="password"
            id="Clave"
            name="Clave"
            required
            class="w-full border border-slate-300 rounded-lg px-3 py-2 mt-1
            focus:ring-2 focus:ring-blue-400 focus:outline-none"
        >
    </div>
    <button type="submit" class="text-white px-4 py-2 mt-4 rounded-md font-medium transition
    bg-linear-to-tr from-yellow-400 to-red-500
    hover:from-yellow-500 hover:to-red-600">Ingresar</button>

    <p class="text-sm text-slate-600 text-center">
        No tienes cuenta? <a href="{{ route('auth.showRegister') }}" class="text-blue-600 hover:underline">Registrate</a>
    </p>
    </form>
</x-layout>
