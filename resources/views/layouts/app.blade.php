<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/ocasion.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/home_login.js') }}"></script>

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>

<body>
    @include('sweetalert::alert')
    <header id="app">
        <div class="logo">
            <img src=" {{ asset('img/IMG HOME/IMG HEADER - SUBMENU HEADER/LOGOS/NEGRO.png') }} "alt="">
        </div>
        <input type="checkbox" id="nav_check" hidden>
        <nav>
            <ul>
                <li>
                    <a href="home" class="">Inicio</a>
                </li>
                <li>
                    <a href="login" class="">Outfit</a>
                </li>
                <li>
                    <a href="post">Post</a>
                </li>
                <li>
                    <a href="tiendas_oficiales">Tiendas</a>
                </li>
                <li>
                    <a class="" data-bs-toggle="dropdown" href="#" role="button"
                        aria-expanded="false">CONTACTOS
                    </a>
                    <ul class="dropdown-menu "
                        style="  background-color: rgba(0, 0, 0, 0); width:100%;padding:0%;backdrop-filter: blur(0px) ;  border:0;">
                        <br>
                        <div style="background-color: rgba(0, 255, 255, 0); width:100%; box-shadow:10px; ">
                            <center>
                                <img src="img/qr.png" alt="" style=" width:50%">
                            </center>
                        </div>
                        <br>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- <section class="home">
            <div class="form_container">
                <i class="uil uil-times form_closed">X</i>
                <!-- imagen del inicio de secion  -->
                <div>
                    <img src="/img/qr.png" alt="" height="10">
                </div>
            </div>
        </section> --}}
        {{-- <script src="{{ asset('js/home_login.js') }}"></script> --}}
        <div class="iniciarr2 ">
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
            <ul class=" botone">
                <!-- Authentication Links -->
                @guest

                    @if (Route::has('login'))
                        <li class="nav-item">
                            <button class="button"><a class="nav-link"
                                    href="{{ route('login') }}">{{ __('Ingresar') }}</a></button>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <button class="button">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                            </button>
                        </li>
                    @endif
                @else
                    {{-- despliegue --}}
                    {{-- <div class="collapse navbar-collapse" id="navbarNavDropdown"> --}}
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle button" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a href="profile" class="bi bi-person-circle bi bi bi bi dropdown-item "> Perfil</a>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Mi Perfil</a>
                            <a class="dropdown-item" href="#">Notificaciones</a>
                            <a class="dropdown-item" href="#">Favoritos</a>
                            {{-- <a class="dropdown-item" href="{{froute('fav.show')}}">favoritoa</a> --}}
                        
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Configuraciones de Cuenta</a>
                            <div class="dropdown-divider"></div>



                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf</form>
                    </li>
            </div>

            </li>
        @endguest
        </div>
    </header>

    {{-- <div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
        </div>
    </div>
     --}}
    {{-- <main class="py-4 cuadro">
        @yield('content')
    </main> --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/home_login.js') }}"></script>
</body>

</html>
