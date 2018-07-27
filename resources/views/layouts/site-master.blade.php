<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">

        <!-- CSS Para plugin trunjs4 (Efeito Livro) --> 
        <link rel="stylesheet" href="{{ asset('assets/css/book.css') }}">

        <title>José Guilherme - @yield('titulo')</title>
        
    </head>
    <body>
        <div class="container">
            @yield('conteudo')
        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('assets/js/jquery/jquery-3.3.1.min.js') }}" ></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}" ></script>

        <!-- Plugins para efeito Livro --> 
        <script src="{{ asset('assets/js/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-mousewheel-master/jquery.mousewheel.js') }}"></script>
        <script src="{{ asset('assets/js/turnjs4/lib/turn.js') }}"></script>

        @yield('codigos-javascript')

    </body>
</html>