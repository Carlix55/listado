@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1 class="mb-4">Bienvenido a la Gestión de Productos</h1>
        <div class="d-grid gap-3 col-6 mx-auto">
            <a href="{{ route('categorias.index') }}" class="btn btn-outline-primary">📁 Ver Categorías</a>
            <a href="{{ route('categorias.create') }}" class="btn btn-outline-success">➕ Crear Categoría</a>
            <a href="{{ route('productos.index') }}" class="btn btn-outline-primary">📦 Ver Productos</a>
            <a href="{{ route('productos.create') }}" class="btn btn-outline-success">➕ Crear Producto</a>
        </div>
    </div>
@endsection
