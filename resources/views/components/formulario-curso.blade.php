<div>
    <div>
        <form action="{{ $curso ? route('curso.update', $curso->id) : route('curso.store') }}" method="POST">
            @csrf
            @if ($curso)
                @method('PUT')
            @endif
    
            <input type="hidden" value="{{$gestion->id}}" id="idGestion" name="idGestion">
            <div class="flex flex-col space-y-2">
                <label for="nombre">Nombre</label>
                <input value="{{ old('nombre', $curso ? $curso->nombre : '') }}" class="border border-gray-400 p-2"
                    type="text" name="nombre" id="nombre">
                @error('nombre')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-2">
                <label for="paralelo">Paralelo</label>
                <input value="{{ old('paralelo', $curso ? $curso->paralelo : '') }}"
                    class="border border-gray-400 p-2" type="text" name="paralelo" id="paralelo">
                @error('paralelo')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex flex-col space-y-2">
                <label for="campo">Campo</label>
                <input value="{{ old('campo', $curso ? $curso->campo : '') }}" class="border border-gray-400 p-2"
                    type="text" name="campo" id="campo">
                @error('campo')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
    
    
            <button type="submit" class="bg-green-500 text-white px-4 py-2 mt-4 rounded">Guardar curso</button>
    
        </form>

    </div>
    
</div>