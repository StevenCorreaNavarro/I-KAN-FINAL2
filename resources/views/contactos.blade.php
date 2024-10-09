<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/contacto.css') }}">
</head>

<body>

    <header>

        <div class="logo">
            <img src="/IMG HEADER - SUBMENU HEADER/LOGOS/NEGRO.png" alt="">
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

    <div class="cuerpo"></div>

    <!-------------primera seccion-------------------------->

    <div class="container">
        <h1 class="title">Somos I KAN</h1>
        <div class="box-container">
            <h2 class="box-title">Quienes somos</h2>
        </div>
        <div class="section">
            <div class="info">
                <p>Información dentro de la sección semitransparente.</p>
            </div>
        </div>
        <br>
        <div class="image-section">
            <img src="/img/Negocios int 1.jpg" alt="">
        </div>
        <br>
        <div class="box-container">
            <h2 class="box-title">Comunicate con nosotros</h2>
        </div>
        <div class="additional-image-section">
            <img src="/img/qr.png" alt="">
            <img src="/img/ropa-casual-hombre-7.jpg" alt="">
        </div>
    </div>

    <br>
    <br>


    <!-------------primera seccion-------------------------->



    <!-------------footer-------------------------->
    <footer>
        <div class="container-ft">
            <div class="footer-content">
                <div class="footer-div">
                    <div class="social-media">
                        <div class="logft">
                            <img src="/img/logo I KAN fondo transpaene recortado blanco.png" alt="">
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