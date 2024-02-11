<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <title>@yield('title')</title>
</head>

<body>
    <header class="bg-green-500 text-center mx-20 my-3 px-2 py-2 space-y-2">
        <div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto flex justify-between">
            <div class="my-1 mx-1 px-3 py-3 bg-green-500">
                <a href="{{url ('/')}}">
                    <img class="w-28" src="img/icono.jpg" alt="Logotipoo gestión liga">
                </a>
            </div>
            <div class="my-1 flex-grow mx-1 px-3 py-3 bg-green-500 flex justify-center items-center space-x-10">
                <a href="{{url ('/')}}">
                    <i class="fas fa-home mx-auto px-10 text-xl text-white"> <p class="font-sans">Inicio</p></i>  
                </a> 
                <a href="{{url ('/teams')}}">
                    <i class="fas fa-tshirt mx-auto px-10 text-xl text-white"> <p class="font-sans">Equipos</p></i>  
                </a> 
                <a href="">
                    <i class="fas fa-futbol mx-auto mx-auto px-10 text-xl text-white"><p class="font-sans">Partidos</p></i> 
                </a> 
            </div>
            <div class="my-1 mx-1 px-3 py-3 bg-green-500 flex justify-center items-center space-x-10 ">
                <a href="{{url ('/')}}">
                    <i class="fas fa-user-circle mx-auto px-10 text-xl text-white"><p class="font-sans">Registro</p></i> 
                </a> 
            </div>
        </div>
	</header>
    
    @yield('content')

    <footer class=" inset-x-0 bottom-0 bg-green-500 text-center mx-20 my-3 px-2 py-2 space-y-2">
		<div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto justify-between">
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <p class="text-center text-white px-2 mt-auto">creado por Albert</p>
            </div>
		</div>
	</footer>
</body>
</html>