<!-- filepath: c:\senasoft\senabike\resources\views\admin\dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Panel de Administración</h1>
    <ul>
        <li><a href="{{ route('product.index') }}">Ver productos</a></li>
        <li><a href="{{ route('product.create') }}">Crear producto</a></li>
        <!-- Agrega aquí más opciones exclusivas para admin -->
    </ul>
@endsection