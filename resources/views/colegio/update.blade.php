<x-layout>
    <x-slot:title>
        Colegios edit
    </x-slot>

    <x-formulario-colegio :colegio="$colegio" />

    @if ($gestiones->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Gestion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($gestiones as $gestion)
                    <tr>
                        <td>{{ $gestion->id }}</td>
                        <td>{{ $gestion->dato }}</td>
                        <td>
                            {{-- <a href="{{ route('gestion.show', ['gestion' => $gestion->id]) }}"
                                class="text-blue-500 hover:underline">
                                Ver Detalles
                            </a> --}}

                            <!-- Botón Editar -->
                            <a href="{{ route('gestion.edit', $gestion->id) }}" {{-- class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded" --}}>
                                Editar
                            </a>

                            <!-- Botón Eliminar -->
                            <form action="{{ route('gestion.destroy', $gestion->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" {{-- class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded" --}}
                                    onclick="return confirm('¿Estás seguro de que deseas eliminar esta gestion?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    @else
        <h1>no hay gestiones</h1>        

    @endif
    </div>
    <form action="{{ route('gestion.store') }}" method="POST" class="inline">
        @csrf
        
        <input type="hidden" id="id_colegio" name="id_colegio" value="{{$colegio->id}}" >
        <div class="flex flex-col space-y-2">
            <label for="dato">Gestion</label>
            <input  class="border border-gray-400 p-2"
                type="text" name="dato" id="dato">
            @error('dato')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" >
            crear
        </button>
    </form>
</x-layout>
