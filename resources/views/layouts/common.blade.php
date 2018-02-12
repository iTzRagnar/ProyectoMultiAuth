<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<header id="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-4 ">
                <ul id="first-menu-i" class="nav nav-pills hidden-xs">
                    <li><a href=""><i class="fa fa-adversal"> h</i> ESTUDIANTE</a></li>
                    <li><a href="#">DOCENTE</a></li>
                    <li><a href="#">ADMINISTRACION</a></li>
                </ul>
            </div>
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <ul id="first-menu-d" class="nav nav-pills hidden-xs">
                    <li><a href="">AULA VIRTUAL</a></li>
                    <li><a href="">CAMPUS VIRTUAL</a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-5 col-sm-2">
                <h1 id="main-logo"><a href="#">SAM</a></h1>
            </div>
            <div class="col-xs-7 col-sm-7">
                <ul id="main-menu" class="nav nav-pills hidden-xs">
                    <li class="#"><a href="">Nosotros</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Carreras <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="">WORKSHOP A</a></li>
                            <li><a href="">WORKSHOP B</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Egresados</a></li>
                    <li><a href="#">Admision</a></li>
                    <li><a href="#">Noticias</a></li>
                </ul>

                <a href="#" id="mobile-menu-button" class="btn btn-default visible-xs">
                    <span class="glyphicon glyphicon-th-list"></span>
                </a>
            </div>
            <div class="col-sm-3">
                <ul class="nav nav-pills hidden-xs">
                    <li><a href="">Buscar</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="visible-xs">
        <ul id="mobile-main-menu">
            <li><a href="">Inicio</a></li>
            <li><a href="">Workshop A</a></li>
            <li><a href="">Workshop B</a></li>
            <li><a href="#">Instalaciones</a></li>
            <li><a href="#">Faq</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </div>
</header>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2> Hola mundo con yield</h2>
            </div>
            <div class="col-sm-4">
                @yield('content')
            </div>
            <div class="col-sm-2">
                <h2>nada de nada</h2>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>





