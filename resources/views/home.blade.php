@extends('layout/template')

@section('title', 'Gestion Liga')

@section('content')

<main>
    
    <div class="bg-green-500 text-center mx-20 mt-4 mb-10 px-2 py-2 space-y-2">
        <div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto justify-between">
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <h1 class="text-center text-white px-2 mt-auto text-2xl font-bold">BIENVENIDOS A LA GESTIÓN DE LA LIGA</h1>
            </div>
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <h1 class="text-center text-white px-2 mt-10 text-xl">¿Que deseas hacer?</h1>
                <div class="bg-green-500 text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto flex justify-between">
                    <button class="ml-60 my-20 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{url ('teams')}}"> ir a equipos</a>
                    </button>
                    <button class="mr-60 my-20 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        <a href="{{url ('games')}}"> ir a partidos</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>
    
@endsection