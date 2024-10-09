<!DOCTYPE html>
<html lang="en">

<head>
    
    <link rel="stylesheet" href="{{ asset('css/tiendas.css') }}"><!-- llamado de la seccion de estilos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    {{-- <link rel="stylesheet" href="{{ asset('css/ocasion.css') }}"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <title>I KAN</title>
</head>

<body>

    @extends('layouts.app')



    <script>
        let submenu = document.getElementById("submenu");

        function toggleMenu() {
            submenu.classList.toggle("open-menu");
        }
    </script>






    <br><br><br>



    <div>
        <table class="">
            @foreach ($occasions as $unit)
                <div class="tablauno">
                    <div class="tablados">
                        <div class="tablatres" style="background-color: rgba(255, 255, 255, 0.496)">
                            <center>
                                <div class="tablaimg">
                                    {{-- en esta parte es para visualizar la imagen subida --}}
                                    {{-- @if ($unit->image)
                                        <img src="{{ asset('images/' . $unit->image) }}" alt="" >
                                    @endif --}}
                                    <br>
                                    <br>
                                    {{-- <h1>{{ {{ $unit->ocasion }} }}</h1> --}}
                                    
                                </div>
                            </center>
                        </div>
                        <div class="tablatext">
                            <div>
                                <p>
                                    {{ $unit->ocasion }}
                                </p>
                            </div><div>
                                {{-- <br><center><a href="/ubicacion">seleccionar</a></center>
                                 --}}
                                 <form action="{{ route('occasions.select', $unit->id) }}" method="POST">
                                    @csrf
                                    <button type="submit">Select</button>
                                </form>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </table>

        {{-- home.home nombre de la ruta --}}
        <br>
        <br>
        {{-- <table class="table">
            @foreach ($units as $unit)
                <tr>
                    <td>{{ $unit->nombre }}</td>
                    <td>{{ $unit->descrip }} </td>
                    <td><a href="{{ route('unit.show', $unit->id) }}">Mostrar</a></td>
                    <td><a href="{{ route('unit.edit', $unit->id) }}">Editar</a></td>
                    <td>
                        <form action="{{ route('unit.destroy', $unit->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table> --}}


























        <footer>
            <div class="container-ft">
                <div class="footer-content">
                    <div class="footer-div">
                        <div class="social-media">
                            <div class="logft">
                                <img src="/img/logo I KAN blanco.png" alt="">
                            </div>
                            <ul class="social-icons">
                                <li>
                                    <h1>Siguenos</h1>
                                </li>
                                <li>
                                    <a href="https://web.facebook.com/?locale=es_LA&_rdc=1&_rdr" target="_blank"><i
                                            class="fab fa-facebook-square"> facebook</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://co.pinterest.com/"><i class="fab fa-pinterest"> Pinterest</i></a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/"><i class="fab fa-youtube"> Youtube</i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"> Instagram</i></a>
                                </li>
                            </ul>
                            <div class="social-icons">
                                <li>
                                    <h1>Somos I KAN</h1>
                                </li>
                                <ul>
                                    <li>Quienes Somos</li>
                                </ul>
                                <ul>
                                    <li>Preguntas frecuentes</li>
                                </ul>
                                <ul>
                                    <li>Comunicate con nosoos</li>
                                </ul>
                            </div>
                            <div class="social-icons">
                                <li>
                                    <h1>Politicas</h1>
                                </li>
                                <ul>
                                    <li>Politica de tratamiento de datos</li>
                                </ul>
                                <ul>
                                    <li>Terminos y condiciones</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <div class="ulti">
            <li>Todos los derechos reservados 2024. I kan Colombia</li>
        </div>


        <script src="/1.Home_login.js"></script>
</body>

</html>
