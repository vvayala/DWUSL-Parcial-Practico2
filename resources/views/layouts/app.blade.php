    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title', 'Parcial Práctico 2')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="/">Parcial Práctico 2</a>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('cliente.index') }}">Cliente</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('articulo.index') }}">Artículo</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pedido.index') }}">Pedido</a></li>
                </ul>
            </div>
        </nav>

        <div class="container my-5">
            @yield('content')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
