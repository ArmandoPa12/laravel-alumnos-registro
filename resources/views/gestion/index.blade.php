<x-layout>
    <x-slot:title>
        Gestion
    </x-slot>
    gestion
    @isset($colegio)
        <h1>{{$colegio->nombre}}</h1>
    @endisset
    <br>    
    colegio : {{ $id ?? 'No id' }}
    
    <select id="location" name="location"   >
        <option disabled selected >Gestion</option>
        @foreach ($gestiones as $dato)
        <option>{{ $dato->dato }}</option>
        @endforeach
    </select>

</x-layout>
