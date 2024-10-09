<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/estilos_estilos.css') }}">
    <link rel="shortcut icon" href="/img/logo I KAN negro.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I KAN</title>
</head>

<body>
    <header>
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
                    <a href="ocasion" class="">Diseñar Outfit</a>
                </li>
                <li>
                    <a href="estilo">Estilos</a>
                </li>
                <li>
                    <a href="tiendas_oficiales">Tiendas</a>
                </li>
                <li>
                    <a href="#" id="form-open2">Contactos</a>
                    <!-- <button class="button" id="form-open2">contactos</button> -->
                </li>
            </ul>
        </nav>
        <div class="user-icon">
            <img src="/IMG HEADER - SUBMENU HEADER/FOTO PERFIL.png" class="user-pic" onclick="toggleMenu()">
            <div class="submenus" id="submenu">
                <div class="submenu">
                    <div class="info">
                        <img src="/IMG HEADER - SUBMENU HEADER/FOTO PERFIL.png" alt="">
                        <h2>Jack Steven Correa</h2>

                    </div>
                    <hr>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/usuario.png">
                        <p>Mi cuenta</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/hogar.png">
                        <p>Inicio</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/favorito (3).png">
                        <p>Favoritos</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/tienda.png">
                        <p>Tiendas Oficiales</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/boton-web-de-ayuda.png">
                        <p>Ayuda/PQR</p>
                        <span>></span>
                    </a>
                    <a href="" class="submenu-links">
                        <img src="/IMG HEADER - SUBMENU HEADER/cerrar-sesion.png">
                        <p>Salir</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </div>

        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>

    <script>
        let submenu = document.getElementById("submenu");

        function toggleMenu() {
            submenu.classList.toggle("open-menu");
        }
    </script>
    <br><br><br>

    <div class="cuer">
        {{-- <div class="texgr">
            <h1>Selecciona tu estilo</h1>
            <img src="/img/IMG ESTILOS/foto estilos.jpg" alt="">
        </div>
        <br><br> --}}

        <div class="cuero">
            <center>
                <img src="/img/IMG ESTILOS/casual.jpg" alt="">
                <div class="intex">
                    <h1>Casual</h1>
                    <p> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra propia
                        piel!
                    </p>
                    <br><br>
                    <button>
                        {{-- **************** ruta laravel ******** --}}
                        <a href="estilo/casual">
                            <h2> SELECCIONAR </h2>
                        </a>
                    </button>
                </div>
            </center>
        </div>

        <div class="cuero2 ">
            <center>
                <img src="/img/IMG ESTILOS/urbano (3).jpg" alt="">
                <div class="intex">
                    <h1>Urbano</h1>
                    <p> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra propia
                        piel!
                    </p>
                    <br><br>
                    <button>
                        {{-- **************** ruta laravel ******** --}}
                        <a href="estilo/urbano">
                            <h2> SELECCIONAR </h2>
                        </a>
                    </button>
                </div>
            </center>
        </div>




        <!-- ****************************************************slider auomatico ************************************************** -->
        {{-- <div class="slider">
            <figure>
                <div class="slide">
                    <a href="https://www.kancanjeanscolombia.com/nueva-coleccion"><img
                            src="/img/IMG ESTILOS/propaganda.jpg" alt="estilo1"></a>
                </div>
                <div class="slide">
                    <a href=""><img src="/img/IMG ESTILOS/propaganda (2).jpg" alt="estilo2"></a>
                </div> --}}
        <!-- <div class="slide">
                    <a href="https://kancanjeans.myvtex.com/_v/segment/admin-login/v1/login?returnUrl=%2FZapatos%3F"><img
                            src="/img/ropa3.webp" alt="estilo3"></a>
                </div>
                <div class="slide">
                    <a href="https://kancanjeans.myvtex.com/_v/segment/admin-login/v1/login?returnUrl=%2FZapatos%3F"><img
                            src="/img/ropaa1.webp" alt="estilo4"></a>
                </div> -->
        {{-- </figure>
        </div> --}}

        <!-- ************************************************************************************************************************************* -->



        <br><br>
        <div class="texgr">
            <img src="/img/el estio es la.jpg" alt="">
        </div>
        <br><br>
        <div class="cuero3">
            <center>
                <img src="/img/IMG ESTILOS/deportivo.jpg" alt="">
                <div class="intex">

                    <h1>Deportivo</h1>
                    <p> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra propia
                        piel!
                    </p>
                    <br><br>
                    <button>
                        {{-- **************** ruta laravel ******** --}}
                        <a href="estilo/deportivo">
                            <h2> SELECCIONAR </h2>
                        </a>
                    </button>
                </div>

        </div>
        </center>
        <div class="cuero4">
            <center>
                <img src="/img/IMG ESTILOS/clasico.jpg" alt="">
                <div class="intex">
    
                    <h1>Clasico</h1>
                    <p> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra propia
                        piel!
                    </p>
                    <br><br>
                    <button>
                        {{-- **************** ruta laravel ******** --}}
                        <a href="estilo/clasico">
                            <h2> SELECCIONAR </h2>
                        </a>
                    </button>
                </div>
            </center>
        </div>
        <script src="i kan.js"></script>
    </div>
    

    


{{-- 
    <br><br>
    <div class="texgr">
        <img src="/img/Banner_home_ESENCIALES_-desktop.jpg" alt="">
    </div>
    <br><br>
    <script src="i kan.js"></script>
    </div> --}}














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



</body>

</html>
