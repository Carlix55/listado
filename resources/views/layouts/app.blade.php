<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Gestión de Productos</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a href="{{ route('categorias.index') }}" class="nav-link">Categorías</a></li>
                    <li class="nav-item"><a href="{{ route('categorias.create') }}" class="nav-link">Crear Categoría</a></li>
                    <li class="nav-item"><a href="{{ route('productos.index') }}" class="nav-link">Productos</a></li>
                    <li class="nav-item"><a href="{{ route('productos.create') }}" class="nav-link">Crear Producto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        
        @yield('content')
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
