<x-layout>
    <x-slot:title>
        Colegios
    </x-slot>

    <div class="max-w-4xl mx-auto mt-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Lista de Colegios</h1>

        @if ($datos->isEmpty())
            <p class="text-gray-600">No hay colegios registrados.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Campo</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($datos as $dato)
                        <tr>
                            <td> {{ $dato->nombre }} </td>
                            <td> {{ $dato->direccion }} </td>
                            <td> {{ $dato->campo }} </td>
                            <td>
                                <a href="{{ route('colegio.show', ['colegio' => $dato->id]) }}" 
                                class="text-blue-500 hover:underline">
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
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        @endif

        <h2 class="text-xl font-bold text-gray-800 mt-8 mb-4">Crear Nuevo Colegio</h2>

        <x-formulario-colegio />

    </div>
</x-layout>
