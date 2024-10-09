<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/ocasion.css') }}">
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





    <div class="cuerpo">
        <div class="imagencentrado">

            <!-- <img src="/img/logo I KAN blanco.png" alt=""> -->
            <!-- <button>
                <h2> ocasiones</h2>
            </button> -->


        </div>

        <!-- ****************************************************slider auomatico ************************************************** -->
        <div class="slider">
            <figure>
                <div class="slide">
                    <a href="https://www.kancanjeanscolombia.com/nueva-coleccion"><img src="/img//IMG OCASIONES/carrusel2.jpg"
                            alt="estilo1"></a>
                </div>
                <div class="slide">
                    <a href=""><img src="/img/IMG OCASIONES/carrusel.jpg" alt="estilo2"></a>
                </div>
                <!-- <div class="slide">
                    <a href="https://kancanjeans.myvtex.com/_v/segment/admin-login/v1/login?returnUrl=%2FZapatos%3F"><img
                            src="/img/ropa3.webp" alt="estilo3"></a>
                </div>
                <div class="slide">
                    <a href="https://kancanjeans.myvtex.com/_v/segment/admin-login/v1/login?returnUrl=%2FZapatos%3F"><img
                            src="/img/ropaa1.webp" alt="estilo4"></a>
                </div> -->
            </figure>
        </div>
        <script src="i kan.js"></script>
        <!-- ************************************************************************************************************************************* -->



        <!-- <div class="cuerpo1">
            <div class="cuerpo2">
                <img src="/img/iz.png" alt="">
                <img src="/img/der.png" alt="">
            </div>
        </div> -->


        <div class="texgr">
            <!-- <h1>Ocasiones</h1> -->
            <center>
                
                <h3> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra propia
                    piel !</h3>
            </center>


        </div>



        <div class="cuer">
            <div class="cuero2">
                <img src="/img/IMG OCASIONES/amigos.jpg" alt="">
                <div class="intex">
                    <center>
                        <h1>Salida con amigos</h1>
                        <p> !lo que buscabas!
                        </p>
                        <br><br>
                        <button>
                            {{-- ******* esta es la ruta web de laravel **** --}}
                            <a href="salida_amigos">
                                <h2> DESCUBRE </h2>
                            </a>
                        </button>
                    </center>
                </div>
            </div>
            <br><br>
            <div class="cuero">
                <div class="intex">
                    <center>
                        <h1>Boda</h1>
                        <p> !Lo que necesitabas !
                        </p>
                        <br><br>
                        <button>
                            <a href="boda">
                                <h2> DESCUBRE</h2>
                            </a>
                            
                        </button>
                    </center>
                </div>
                <img src="/img/IMG OCASIONES/boda.jpg" alt="">
            </div>




            <div class="texgr">
                <img src="/img/IMG OCASIONES/IMAGEN.jpg" alt="">
            </div>

            <div class="cuero3">
                <img src="/img/IMG OCASIONES/negocios.jpg" alt="">
                <div class="intex">
                    <center>
                        <h1>NEGOCIOS</h1>
                        <p> !Lo que buscabas!
                        </p>
                        <br><br>
                        <button>
                            <a href="negocios">
                                <h2> DESCUBRE</h2>
                            </a>
                        </button>
                    </center>
                </div>
            </div>
            <br><br>
            <div class="cuero4">
                <div class="intex">
                    <center>
                        <h1>NOCHE DE FIESTA</h1>
                        <p> ! Justo lo que necesitas !
                        </p>
                        <br><br>
                        <button>
                            <a href="noche_de_fiesta">
                                <h2> DESCUBRE</h2>
                            </a>
                        </button>
                    </center>
                </div>
                <img src="/img/IMG OCASIONES/fiesta.jpg" alt="">
            </div>
            <br><br>
            <div class="texgr">
                <img src="/img/Banner_home_ESENCIALES_-desktop.jpg" alt="">
            </div>

        </div>


    </div>
<br><br><br><br>


    <div class="regis">
        <marquee>Registrate <button>Registrate Gratis</button></marquee>

    </div>

    <br><br><br><br>

    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <picture>
                    <a href="#">
                        <img src="/img/LOGOS BLANCO Y NEGRO/BLANCO.png" alt="Logo de SLee Dw">
                    </a>
                </picture>
            </div>
            <div class="box">
                <h2>SIGUENOS EN </h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
            <div class="box">
                <h2>SOMOS I KAN</h2>
                <p>Quienes Somos</p>
                <p>Preguntas frecuentes</p>
                <p>Comunicate con nosotros</p>
            </div>

            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Politica de tratamiento de <br>datos</p>
                <p>Terminos y Condiciones</p>
            </div>

            <div class="box">
                <h2>ATENCION AL CLIENTE</h2>
                <p>Politica de tratamiento de <br>datos</p>
                <p>Terminos y Condiciones</p>
            </div>



        </div>
        <div class="grupo-2">
            <small>2024 <b>Moda</b> - Todos los derechos reservados 2024. I kan Colombia</small>
        </div>
    </footer>


    <script src="/1.Home_login.js"></script>

</body>

</html>