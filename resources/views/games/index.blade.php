@extends('layout/template')

@section('title', 'Listado de Partidos')

@section('content')

<main class="mx-20 my-4">
    <div class="bg-green-500 text-center px-2 py-2 space-y-2">
        <div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto justify-between">
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <h1 class="text-center text-white px-2 mt-auto text-2xl font-bold">LISTADO DE PARTIDOS</h1>
            </div>
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                
                <div class="mx-auto max-w-4xl my-4">
                    <table class="text-white text-lg mx-auto text-center">
                        
                        <tbody>
                            @foreach($games as $game)
                            <tr class="border-b {{ $loop->last ? '' : 'border-white' }}">
                                <td class="px-4 py-2 text-center text-xl font-bold" colspan="5">Partido id  {{ $game->id }}</td>
                            </tr>
                            <tr class="border-b {{ $loop->last ? '' : 'border-white' }}">
                                <td class="px-4 py-2">{{ $game->localTeam->name }}</td>
                                <td class="px-4 py-2">{{ $game->awayTeam->name }}</td>
                            </tr>
                            <tr class="border-b {{ $loop->last ? '' : 'border-white' }}">
                                <td class="px-4 py-2">{{ $game->home_goals }}</td>
                                <td class="px-4 py-2">{{ $game->away_goals }}</td>
                            </tr>
                            <tr class="border-b {{ $loop->last ? '' : 'border-white' }}">
                                <td class="px-4 py-2">
                                    <button class="bg-green-600 hover:bg-yellow-500 py-2 px-6 my-3 rounded">
                                        <a href="{{url ('games/'. $game->id. '/edit')}}"> Editar</a>
                                    </button>
                                </td>
                                <td class="px-4 py-2">
                                    <form action="{{url('games/' .$game->id)}}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres borrar este partido?');">
                                        @method("DELETE")
                                        @csrf
                                        <button class="bg-green-600 hover:bg-red-700 py-2 px-4 my-3 rounded" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 my-3 rounded">
                    <a href="{{url ('games/create')}}"> Registrar partido</a>
                </button>
                
            </div>
        </div>
    </div>
</main>
    
@endsection
