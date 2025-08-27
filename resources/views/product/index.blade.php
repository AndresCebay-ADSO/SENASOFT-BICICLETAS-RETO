@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-white p-8 rounded shadow">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Productos</h2>
        <a href="{{ route('product.create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">Crear Producto</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded shadow">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Código</th>
                    <th class="py-2 px-4 border-b">Marca</th>
                    <th class="py-2 px-4 border-b">Color</th>
                    <th class="py-2 px-4 border-b">Estado</th>
                    <th class="py-2 px-4 border-b">Disponibilidad</th>
                    <th class="py-2 px-4 border-b">Precio/Hora</th>
                    <th class="py-2 px-4 border-b">Peso (Kg)</th>
                    <th class="py-2 px-4 border-b">Stock</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $product->nameProd }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->codeProd }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->markProd }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->colorProd }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->statusProd }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->availabilityProd }}</td>
                        <td class="py-2 px-4 border-b">${{ number_format($product->priceHourProd, 0, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->pesoKgProd }}</td>
                        <td class="py-2 px-4 border-b">{{ $product->stockProd }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('product.edit', $product->id) }}" class="text-blue-600 hover:underline mr-2">Editar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="py-4 text-gray-500 text-center">No hay datos</td>
                    </tr>
                @endforelse
            </tbody>