@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Panel de Productos</h1>
    <div class="flex justify-end mb-4">
        <a href="{{ route('product.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Agregar Producto</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Descripción</th>
                    <th class="py-2 px-4 border-b">Precio</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products ?? [] as $product)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $product->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->description }}</td>
                    <td class="py-2 px-4 border-b">${{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('product.edit', $product->id) }}" class="text-blue-600 hover:underline mr-2">Editar</a>
                        <!-- Puedes agregar más acciones aquí -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @if(empty($products) || count($products) === 0)
            <p class="text-center text-gray-500 mt-4">No hay productos registrados.</p>
        @endif