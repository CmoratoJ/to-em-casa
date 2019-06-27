<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TôEmCasa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script src="js/app.js" charset="utf-8"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light align-items-center">
    <img class="tamanho-img" src="/img/logo.png">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ active('home') }}">
        <a class="nav-link" href="{{ route('home') }}">Início</a>
            </li>
            <li class="nav-item mr-5 {{ active('acomodacoes') }}">
                <a class="nav-link" href="{{ route('acomodacoes') }}">Acomodações</a>
            </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Ex:Belo Horizonte" aria-label="Pesquisar">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </ul>
        @guest
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/register">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
            </ul>
        @endguest

        @auth
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/sair">Sair</a>
                </li>
            </ul>
        @endauth
    </div>
</nav>
<div>
    @yield('conteudo')

    <footer class="text-center bg-lightgray">

        <div class="copyrights mt-5">
            <p>ToEmCasa © 2019, Todos os direitos reservados</p>
            <p>Developer: Caio Morato</p>
        </div>
    </footer>
</div>
</body>
</html>
