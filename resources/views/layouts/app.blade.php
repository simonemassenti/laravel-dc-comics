<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Importiamo la parte di js e sass tramite vite --}}
    @vite('resources/js/app.js')
</head>
    @include('partials.header');
<body>
    <main>
        @yield('content')
    </main>
    
</body>
</html>