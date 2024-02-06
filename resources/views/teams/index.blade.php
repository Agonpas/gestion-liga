@extends('layout/template')

@section('title', 'Gestion Liga')

@section('content')

<main>
    <div class="">
        <h1> Bienvenidos al listado de los equipos</h1>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{url ('teams/create')}}"> Crear equipo</a>
        </button>
        
    </div>
</main>
    
@endsection