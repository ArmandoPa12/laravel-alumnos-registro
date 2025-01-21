<x-layout>
    <x-slot:title>
        Colegios | cursos
    </x-slot>
    gestion desde colegios
    @isset($colegio)
        <h1>{{$colegio->nombre}}</h1>
    @endisset
    <br>    
 
    
    {{-- <div class="gestiones">
        <h2>Gestiones</h2>
        @foreach ($gestiones as $gestion)
            <a href="{{ route('colegio.index', ['id' => $colegio->id, 'gestion' => $gestion->id]) }}"
                class="{{ $gestionSeleccionada == $gestion->id ? 'font-bold text-blue-500' : '' }}">
                {{ $gestion->dato }}
            </a>
        @endforeach
    </div> --}}




        @foreach ($gestiones as $dato)
        <a href="{{ route('gestion.show', $dato->id) }}"
            class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-3 rounded">
            {{$dato->dato}}
        </a>
        <br>
        <br>
        @endforeach

</x-layout>
