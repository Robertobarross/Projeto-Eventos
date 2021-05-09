<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        {{--CSS Bootstrap--}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

        {{--Link do arquivo css, que está na pasta public/css/styles.css--}}
        <link rel="stylesheet" href="css/styles.css">

        {{--Link do arquivo java script, está na pasta public/js/scripts.js--}}
        <script src="js/scripts.js"></script>

    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-ligth">
            <div class="collapse.navbar-collpase" id="navbar">
            <a href="/" class="navbar-brand">
            <img src="img/logo.png" class="logo" alt="Projeto-Eventos">
            </a>
            <ul class="navbar-nav">
               <li class="nav.item">
                    <a href="/" class="nav link">Eventos</a>
                    <a href="eventos/create" class="nav link">Criar Eventos</a>
                    <a href="/" class="nav link">Entrar</a>
                    <a href="/" class="nav link">Cadastrar</a>
                    <a href="contato" class="nav link">Contato</a>
               </li>
            </ul>
            </div>
            </nav>
        </header>

        @yield('content'){{--Aqui é onde vai aparecer o conteúdo--}}

        <footer>{{--Aqui é o rodapé--}}
        <p class="texto2">Projeto-Eventos &COPY; 2021</p>
        </footer>

        {{--Link de ícones--}}
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>
