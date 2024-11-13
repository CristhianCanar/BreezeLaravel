<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Header de la app</h1>
    </header>

    <main>
        @yield('contenido')
    </main>

    <footer>
        <p>Pie de página</p>
    </footer>

</body>
</html>
