<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <link rel="stylesheet" href="css/ocasion.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

    <title>I KAN</title>
</head>

<body
    style="
background: linear-gradient(#323534, #444847,#444847);
background-attachment: fixed;
background-size: cover;">

    @extends('layouts.app')

    <div class="cuerpo">

        <div class="texgr">
            <center>
                @yield('content')
                <h3> !Nos vestimos para impresionar a los demás o para sentirnos cómodos y seguros en nuestra propia
                    piel !</h3>
            </center>
        </div>

        <div class="cuer">
            <div class="cuero2">
                <img src="img/IMG OCASIONES/amigos.jpg" alt="">
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
                <img src="img/IMG OCASIONES/boda.jpg" alt="">
            </div>




            <div class="texgr">
                <img src="img/IMG OCASIONES/IMAGEN.jpg" alt="">
            </div>

            <div class="cuero3">
                <img src="img/IMG OCASIONES/negocios.jpg" alt="">
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
                <img src="img/IMG OCASIONES/fiesta.jpg" alt="">
            </div>
            <br><br>
            <div class="texgr">
                <img src="img/Banner_home_ESENCIALES_-desktop.jpg" alt="">
            </div>

        </div>


    </div>
    <br><br><br><br>


    <div class="regis">
        <marquee>Registrate <button>Registrate Gratis</button></marquee>

    </div>

    <br><br><br><br>

    @extends('layouts.footer')

</body>

</html>
