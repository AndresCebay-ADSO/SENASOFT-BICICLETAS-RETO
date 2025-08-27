@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-8 rounded shadow">
    <a href="{{ route('product.index') }}" class="text-green-600 hover:underline mb-4 inline-block">&larr; Volver al listado</a>
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Crear Producto</h2>
    <form method="POST" action="{{ route('product.store') }}" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="nameProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Código</label>
            <input type="text" name="codeProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Marca</label>
            <input type="text" name="markProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Color</label>
            <input type="text" name="colorProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Estado</label>
            <input type="text" name="statusProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Disponibilidad</label>
            <input type="text" name="availabilityProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Precio por hora</label>
            <input type="text" name="priceHourProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Imagen</label>
            <input type="text" name="imgProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Peso (Kg)</label>
            <input type="text" name="pesoKgProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Stock</label>
            <input type="text" name="stockProd" class="mt-1 block w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-green-500 focus:border-green-500">
        </div>
        <button type="submit" class="w-full py-2 px-4 bg-green-600 text-white font-semibold rounded hover:bg-green-700 transition">Crear Producto</button>