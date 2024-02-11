@extends('layout/template')

@section('title', 'Listado de Equipos')

@section('content')

<main class="mx-20 my-4">
    <div class="bg-green-500 text-center px-2 py-2 space-y-2">
        <div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto justify-between">
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <h1 class="text-center text-white px-2 mt-auto text-2xl font-bold">LISTADO DE EQUIPOS</h1>
            </div>
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                
                <div class="mx-auto max-w-4xl my-4">
                    <table class="text-white text-lg">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Id</th>
                                <th class="px-4 py-2">Númreo federacion</th>
                                <th class="px-4 py-2">Nombre equipo</th>
                                <th class="px-4 py-2">Localidad equipo</th>
                                <th class="px-4 py-2">Acción Editar</th>
                                <th class="px-4 py-2">Acción borrar</th>
                            </tr>
                            <tbody>
                                @foreach($teams as $team)
                                <tr>
                                    <td class="px-4 py-2">{{ $team->id }}</td>
                                    <td class="px-4 py-2">{{ $team->fed_number }}</td>
                                    <td class="px-4 py-2">{{ $team->name }}</td>
                                    <td class="px-4 py-2">{{ $team->city }}</td>
                                    <td class="" >
                                        <button class="bg-green-600 hover:bg-yellow-500 py-2 px-4 my-3 rounded">
                                            <a href="{{url ('teams/create')}}"> Editar</a>
                                        </button></td>
                                    <td class="">
                                        <form action="{{url('teams/' .$team->id)}}" method="POST">
                                            @method("DELETE")
                                            @csrf
                                            <button class="bg-green-600 hover:bg-red-700 py-2 px-4 my-3 rounded" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
                <button class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 my-3 rounded">
                    <a href="{{url ('teams/create')}}"> Crear equipo</a>
                </button>
            </div>
            
        </div>
    </div>
   
</main>
    
@endsection