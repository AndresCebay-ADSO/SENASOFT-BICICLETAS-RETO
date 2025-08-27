@extends('layouts.app')

@section('content')

<!-- resources/views/auth/login.blade.php -->
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
        
        <div class="flex flex-col items-center mb-6">
            <img src="{{ asset('img/senabike-logo.png') }}" alt="SenaBike Logo" class="w-24 h-24 mb-2">
            <img src="{{ asset('img/sena-logo.png') }}" alt="Sena Logo" class="w-16 h-16">
        </div>

        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Iniciar Sesión</h2>
        <form method="POST" action="{{ route('auth.login') }}" class="space-y-5">
            @csrf
            <div>
                <label for="emailUser" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <input type="email" name="emailUser" id="emailUser" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
                <label for="passUser" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" name="passUser" id="passUser" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button type="submit"
                class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 transition">Ingresar</button>
        </form>
        <div class="mt-6 text-center">
            <span class="text-gray-600">¿No tienes cuenta?</span>
            <a href="{{ route('register.form') }}" class="text-green-600 hover:underline font-semibold">Regístrate</a>
        </div>  
    </div>
</div>

@endsection