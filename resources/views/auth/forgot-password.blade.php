@extends('layout/template')

@section('title', 'Recuperar contraseña')

@section('content')
<x-guest-layout>
    <main class="mx-1 my-4">
        <div class="bg-green-500 text-center px-2 py-2 space-y-2">
            <div class="my-1 mx-1 px-3 py-2 bg-green-500">
                <h1 class="text-center text-white px-2 mt-auto text-2xl font-bold">RECUPERAR CONTRASEÑA</h1>
            </div>
            <div class="mb-4 text-sm text-white">
                {{ __('¿Has olvidado tu contraseña? No te preocuper. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </main>
</x-guest-layout>
@endsection
