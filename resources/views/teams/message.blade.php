@extends('layout/template')

@section('title', 'Crear Equipos')

@section('content')
<main>
    <section>
        <h1> {{ $msg }}</h1>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{url ('teams')}}"> Volver</a>
        </button>
    </section>
</main>