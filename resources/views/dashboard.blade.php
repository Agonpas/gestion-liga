@extends('layout/template')

@section('title', 'Dashboard')

@section('content')
<main class="mx-20 my-4">
    <div class="bg-green-500 text-center px-2 py-2 space-y-2 ">
        <div class="bg-white text-center mx-1 my-1 px-1 py-1 space-y-auto space-x-auto justify-between">
            <x-app-layout>
                
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                </x-slot>
        
                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-green-500 overflow-hidden shadow-sm ">
                            <div class="p-6 text-white">
                                {{ __("You're logged in!") }}
                            </div>
                        </div>
                    </div>
                </div>
            </x-app-layout>
        </div>
    </div>
</main>

@endsection
