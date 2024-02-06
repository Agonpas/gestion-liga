@extends('layout/template')

@section('title', 'Crear Equipos')

@section('content')

<main>
    <section>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1> Bienvenidos a la creación de equipos</h1>
            <form action="{{url ('teams')}}" method="post" >
                @csrf
                <div class="mb-4 row">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre del equipo</label>
                    <div class="col-sm-5">
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="teamname" name="name" value="{{old ('name')}}" placeholder="Pon aquí el nombre del equipo" required>
                    </div>
                </div>
            </form>
            <form action="{{url ('teams')}}" method="post">
                @csrf
                <div class="mb-4 row">
                    <label for="city" class="block text-gray-700 text-sm font-bold mb-2">Población del equipo</label>
                    <div class="col-sm-5">
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="teamcity" name="city" value="{{old ('city')}}" placeholder="Pon aquí el nombre de la población" required>
                    </div>
                </div>
            </form>
            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Guradar</button>

            <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                <a href="{{url ('teams')}}"> Volver</a>
            </button>
        </div>
    </section>
   
</main>
    
@endsection