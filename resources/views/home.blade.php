@extends('layout/template')

@section('title', 'Gestion Liga')

@section('content')

<main class="mx-20 my-4">
    
    <div class="bg-green-500 text-center px-2 py-2 space-y-2">
        <div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto justify-between">
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <h1 class="text-center text-white px-2 mt-auto text-2xl font-bold">BIENVENIDOS A LA GESTIÓN DE LA LIGA</h1>
            </div>
            <div class="my-1 mx-1 px-3 py-0 bg-green-500">
                
         
                <div class="flex items-center justify-center">
                    <button class="mx-auto my-20 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{url ('teams')}}"> EQUIPOS</a>
                    </button>
                    <img class="mt-10 w-96" src="{{ asset('img/area2.png') }}" alt="Area futbol">
                    <button class="mx-auto my-20 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{url ('games')}}"> PARTIDOS</a>
                    </button>
                    
                </div>
                
            </div>
        </div>
    </div>
</main>
    
@endsection