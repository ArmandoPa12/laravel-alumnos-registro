<x-layout>
    <x-slot:title>
        Gestion | Cursos
    </x-slot>
    Cursos
    <br>


    @foreach ($personas as $persona)
        <div  class="flex items-center" >
            {{$persona->nombre}}
            <div class="flex items-center space-x-4" >
                <form action="{{ route('persona.edit', $persona) }}" method="GET" class="inline">
                    <button type="submit"
                    class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                        Editar
                    </button>
                </form>
                <form action="{{ route('persona.destroy', $persona) }}" method="POST"
                    onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta persona?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded">
                        Eliminar
                        
                    </button>
                </form>
                <form action="{{ route('persona.show', $persona) }}" method="GET" class="inline">
                    <button type="submit"
                    class="bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded">
                        Medidas
                    </button>
                </form>
            </div>
            
            
        </div>
        <br>
    @endforeach

    
   


</x-layout>
