@extends('layout/template')

@section('title', 'Editar Equipos')

@section('content')

<main class="mx-20 my-4">
    <div class="bg-green-500 text-center px-2 py-2 space-y-2">
        <div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto justify-between">
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <h1 class="text-center text-white px-2 mt-auto text-2xl font-bold">MODIFICACIÓN DE PARTIDOS</h1>
            </div>
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <div class="bg-green-500 rounded px-8 pt-6 pb-8 mb-4">
                    @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                        <strong class="font-bold">Error!</strong>
                        <span class="block sm:inline">Algo que no queremos que pase está pasando.</span>
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        
                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </span>
                    </div>
                </div>
            
                @endif
                <form action="{{ route('games.update', ['game' => $game->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                
                    <div class="mb-4 row">
                        <label for="home_team_id" class="block text-white text-lg font-bold mb-2"> Equipo Local </label>
                        <div class="col-sm-5 w-96 mx-auto">
                            <select name="home_team_id" id="home_team_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}" {{ $game->home_team_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> 
                    <div class="mb-4 row">
                        <label for="home_goals" class="block text-white text-lg font-bold mb-2">Goles equipo local</label>
                        <div class="col-sm-5 w-24 mx-auto">
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="home_goals" name="home_goals" value="{{ $game->home_goals }}" placeholder="introduce goles equipo local" required>
                        </div>
                    </div>                  
                    <div class="mb-4 row">
                        <label for="away_team_id" class="block text-white text-lg font-bold mb-2"> Equipo visitante </label>
                        <div class="col-sm-5 w-96 mx-auto">
                            <select name="away_team_id" id="away_team_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                @foreach($teams as $team)
                                    <option value="{{ $team->id }}" {{ $game->away_team_id == $team->id ? 'selected' : '' }}>{{ $team->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>                  
                    <div class="mb-4 row">
                        <label for="away_goals" class="block text-white text-lg font-bold mb-2">Goles equipo visitante</label>
                        <div class="col-sm-5 w-24 mx-auto">
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="away_goals" name="away_goals" value="{{ $game->away_goals }}" placeholder="introduce goles equipo visitante" required>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 my-auto rounded">Guardar</button>
                        <a href="{{ url('games') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 my-auto rounded">Volver</a>
                    </div>
                </form>
                
            </div>
        </div>   
    </div>
   
</main>
@endsection