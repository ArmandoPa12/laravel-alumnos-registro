<div>
    <form action="{{ $colegio ? route('colegio.update', $colegio->id) : route('colegio.store') }}" method="POST">
        @csrf
        @if ($colegio)
            @method('PUT')
        @endif

        <div class="flex flex-col space-y-2">
            <label for="nombre">Nombre</label>
            <input value="{{ old('nombre', $colegio ? $colegio->nombre : '') }}" class="border border-gray-400 p-2"
                type="text" name="nombre" id="nombre">
            @error('nombre')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="direccion">Direccion</label>
            <input value="{{ old('direccion', $colegio ? $colegio->direccion : '') }}"
                class="border border-gray-400 p-2" type="text" name="direccion" id="direccion">
            @error('direccion')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col space-y-2">
            <label for="campo">Campo</label>
            <input value="{{ old('campo', $colegio ? $colegio->campo : '') }}" class="border border-gray-400 p-2"
                type="text" name="campo" id="campo">
            @error('campo')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        @if (!$colegio)
            <div class="flex flex-col space-y-2">
                <label for="gestion">Gestion</label>
                <input class="border border-gray-400 p-2" type="text" name="gestion" id="gestion">
                @error('gestion')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        @endif


        <button type="submit" class="bg-green-500 text-white px-4 py-2 mt-4 rounded">Guardar Colegio</button>

    </form>

    {{-- <form action="{{ $colegio ? route('colegio.update', $colegio->id) : route('colegio.store') }}" method="POST"
        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @if ($colegio)
            @method('PUT')
        @endif
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
            <input type="text" id="nombre" name="nombre"
                value="{{ old('nombre', $colegio ? $colegio->nombre : '') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
            @error('nombre')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="direccion" class="block text-gray-700 text-sm font-bold mb-2">Dirección:</label>
            <input type="text" id="direccion" name="direccion"
                value="{{ old('direccion', $colegio ? $colegio->direccion : '') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
            @error('direccion')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="campo" class="block text-gray-700 text-sm font-bold mb-2">Campo:</label>
            <input type="text" id="campo" name="campo"
                value="{{ old('campo', $colegio ? $colegio->campo : '') }}"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
            @error('campo')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Crear Colegio
            </button>
        </div>
    </form> --}}
</div>
