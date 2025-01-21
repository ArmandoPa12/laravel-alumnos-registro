<x-layout>
    <x-slot:title>
        Gestion | Cursos
    </x-slot>
    Cursos
    <br>
    {{-- @foreach ($cursos as $curso)
    <a href="#"
        class="inline-block bg-blue-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded-lg shadow-md transition-all duration-200">
        {{$curso->nombre}} | {{$curso->paralelo}}
    </a>       
    @endforeach --}}

    @foreach ($cursos as $curso)
        <div
            class="inline-flex items-center bg-blue-500 hover:bg-yellow-600 text-black font-bold py-2 px-4 rounded-lg shadow-md transition-all duration-200 space-x-2">
            <a href="{{route('curso.show',$curso)}}" class="flex-1">
                {{ $curso->nombre }} | {{ $curso->paralelo }}
            </a>
            {{-- <a href="" class="text-black hover:text-gray-800 py-2">
                <!-- Ícono de lápiz -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </a> --}}
            <form action="{{ route('curso.destroy', $curso) }}" method="POST"
                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este curso?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-black hover:text-gray-800">
                    <!-- Ícono de X -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </form>
        </div>
    @endforeach

   


    {{-- <x-formulario-curso /> --}}
    <x-formulario-curso :curso="null" :gestion="$gestion" />


</x-layout>
