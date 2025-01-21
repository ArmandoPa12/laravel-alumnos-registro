<x-layout>
    <x-slot:title>
        Gestion | Editar
    </x-slot>
    <form action="{{ route('gestion.update', $gestion->id) }}" method="POST" class="inline">
        @csrf
        @method('PUT')
        <div class="flex flex-col space-y-2">
            <input type="hidden" id="id_colegio" name="id_colegio" value="{{$gestion->id_colegio}}" >
            <label for="dato">Gestion</label>
            <input  class="border border-gray-400 p-2"
                type="text" name="dato" id="dato" value="{{ old('dato', $gestion->dato) }}">
            @error('dato')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" >
            Guardar
        </button>
    </form>
   
</x-layout>
