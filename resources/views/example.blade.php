{{-- <!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>{{$title ?? 'titulo default'}}</title>
</head>

<body>
  <h4>lista de coelgios</h4>
  <h2>esto es un value: {{$value}}</h2>
  @foreach ($datos as $dato)
    {{$dato->nombre}} | 
  @endforeach
</body>

</html> --}}
<x-layout>
  <x-slot:title>
        Colegios
    </x-slot>
  @foreach ($datos as $dato)
    {{$dato->dato}} | 
  @endforeach
</x-layout>


