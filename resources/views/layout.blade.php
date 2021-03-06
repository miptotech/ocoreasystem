
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ItSAT</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ItSAT</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                @if (Auth::guest())
                    <li><a href="{{ route('home') }}">Home</a></li>
                @else
                    <li><a href="{{ route('note.index') }}">Notas Diarias</a></li>
                    <li><a href="{{ route('st.index') }}">Servicio Tecnicos</a></li>
                    <li><a href="{{ route('logout') }}">ST Asignados</a></li>
                    <li><a href="{{ route('logout') }}">Contratos Mantenimiento</a></li>
                    <li><a href="{{ route('logout') }}">Equipo Tienda</a></li>
                    <li><a href="{{ route('logout') }}">Reportes</a></li>
                    <li><a href="{{ route('client.index') }}">Clientes</a></li>
                    <li><a href="{{ route('logout') }}">Configuracion</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->var_username }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

        <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>