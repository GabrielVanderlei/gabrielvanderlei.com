<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gabriel Vanderlei</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="/css/app.css" />
        <script type="text/javascript" src="/js/app.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('blog.inicio')}}"><img src="/assets/logo.svg" width="50"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link {{(Route::current()->getName() == 'blog.sobre') ? 'active':''}}" href="{{route('blog.sobre')}}">Sobre Mim <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link {{(Route::current()->getName() == 'blog.portfolio') ? 'active':''}}" href="{{route('blog.portfolio')}}">Portfólio</a>
                <a class="nav-item nav-link {{(Route::current()->getName() == 'blog.produtos') ? 'active':''}}" href="{{route('blog.produtos')}}">Produtos</a>
                <a class="nav-item nav-link {{(Route::current()->getName() == 'blog.contato') ? 'active':''}}" href="{{route('blog.contato')}}">Contato</a>
                </div>
            </div>
        </nav>
        </header>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            @yield("conteudo")
        </div>
        <footer>
            <div class="container">
                <div class="row text-center p-3">
                    <div class="col">
                        Gabriel Vanderlei de Oliveira © 2019
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
