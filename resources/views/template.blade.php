<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>CRUD - Cliente</title>
</head>
<body>
    @yield('conteudo')

    <script src={{ asset('js/app.js') }}></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/javascript.js') }}"></script>
</body>
</html>