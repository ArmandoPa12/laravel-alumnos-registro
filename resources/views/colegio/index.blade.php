<x-layout>
    <x-slot:title>
        Colegios
    </x-slot>

    <div class="max-w-4xl mx-auto mt-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Lista de Colegios</h1>

        @if ($datos->isEmpty())
            <p class="text-gray-600">No hay colegios registrados.</p>
        @else
            <ul class="list-disc pl-5 space-y-4">
                @foreach ($datos as $dato)
                    <li class="text-gray-700 flex items-center justify-between">
                        <div>
                            <span class="font-semibold">Nombre:</span> {{ $dato->nombre }} |
                            <span class="font-semibold">Dirección:</span> {{ $dato->direccion }} |
                            <span class="font-semibold">Campo:</span> {{ $dato->campo }}
                        </div>
                        <div class="space-x-2">
                            <a href="{{ route('gestion.show', ['gestion' => $dato->id]) }}" class="text-blue-500 hover:underline">
                                Ver Detalles
                            </a>
                            
                            <!-- Botón Editar -->
                            <a href="{{ route('colegio.edit', $dato->id) }}"
                                class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">
                                Editar
                            </a>

                            <!-- Botón Eliminar -->
                            <form action="{{ route('colegio.destroy', $dato->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded"
                                    onclick="return confirm('¿Estás seguro de que deseas eliminar este colegio?')">
                                    Eliminar
                                </button>
                            </form>
                            
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif

        <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4">Crear Nuevo Colegio</h2>

        <x-formulario-colegio />

    </div>
</x-layout>
