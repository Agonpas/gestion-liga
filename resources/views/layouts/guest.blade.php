<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 mx-20 bg-green-500">
            <div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto flex justify-between">
                <div class=" bg-green-500 text-center mx-2 my-2 px-2 py-2 space-y-auto space-x-auto flex justify-between">
                    <div>
                        <a href="{{url ('/')}}">
                            <img class="w-28" src="{{ asset('img/icono.jpg') }}" alt="Logotipoo gestión liga">
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full sm:max-w-md my-2 px-4 py-2 bg-white overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
