<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Aristóteles')</title>
</head>
<body>
    <header>
        @include('layouts.header')<!-- Componente del cabecero que siempre será igual en todas las vistas -->
    </header>
    <main>
        @include('layouts.rol')<!-- Se vincula una vista desarrollada pensando en la gestión de los roles de usuario -->
        @section('interaccion')
            <h2>¿Cómo te podemos ayudar hoy</h2>
            <b></b>
            <ul>
                <li>@yield('actividad', 'Observador Digital del Estudiante')
                    <nav>
                        <ul><h3>@yield('proceso', 'Gestionar Episodio')</h3>
                            <li><a href="#">@yield('subproceso', 'Crear')</a></li>
                            <li><a href="#">@yield('subproceso', '##')</a></li>
                            <li><a href="#">@yield('subproceso', '##')</a></li>
                        </ul>
                    </nav>
                </li>
                <li>@yield('actividad', '###')
                    <nav>
                        <ul><h3>@yield('proceso', '###')</h3>
                            <li><a href="#">@yield('subproceso', '###')</a></li>
                            <li><a href="#">@yield('subproceso', '##')</a></li>
                            <li><a href="#">@yield('subproceso', '##')</a></li>
                        </ul>
                    </nav>
                </li>
                <li>@yield('actividad', '###')
                    <nav>
                        <ul><h3>@yield('proceso', '###')</h3>
                            <li><a href="#">@yield('subproceso', '###')</a></li>
                            <li><a href="#">@yield('subproceso', '##')</a></li>
                            <li><a href="#">@yield('subproceso', '##')</a></li>
                        </ul>
                    </nav>
                </li>
                <li>@yield('actividad', '###')
                    <nav>
                        <ul><h3>@yield('proceso', '###')</h3>
                            <li><a href="#">@yield('subproceso', '###')</a></li>
                            <li><a href="#">@yield('subproceso', '##')</a></li>
                            <li><a href="#">@yield('subproceso', '##')</a></li>
                        </ul>
                    </nav>
                </li>
            </ul>
        @endsection;
    </main>
    <footer>
    @include('layouts.footer')
    </footer>
</body>
</html>