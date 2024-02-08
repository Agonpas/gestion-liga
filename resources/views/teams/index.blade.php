@extends('layout/template')

@section('title', 'Gestion Liga')

@section('content')

<main>

    <div class="">
        <h1> Bienvenidos al listado de los equipos</h1>
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{url ('teams/create')}}"> Crear equipo</a>
        </button>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Númreo federacion</th>
                    <th>Nombre equipo</th>
                    <th>Localidad equipo</th>
                    <th></th>
                    <th></th>
                </tr>
                <tbody>
                    @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->fed_number }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->city }}</td>
                        <td><a href="{{ url('teams/' . $team->id . '/edit')}}">Editar</a></td>
                        <td>
                            <form action="{{url('teams/' .$team->id)}}" method="POST">
                                @method("DELETE")
                                @csrf
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
        
    </div>
</main>
    
@endsection