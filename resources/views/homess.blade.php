<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}"><!-- llamado de la seccion de estilos -->
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="js/1.Home.js"></script>
    <title>Inicio - I kan </title>
</head>

<body
    style="
background: linear-gradient(#323534, #606161,#444847,#444847);
background-attachment: fixed;
background-size: cover;">

    @include('sweetalert::alert')
    @extends('layouts.app')


    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, fugiat ab iusto, doloribus sapiente dignissimos obcaecati rerum, aliquid illo enim tenetur delectus. Cumque impedit voluptates corporis, cupiditate molestias nisi debitis.</p> -->
    <script>
        let submenu = document.getElementById("submenu");

        function toggleMenu() {
            submenu.classList.toggle("open-menu");
        }
    </script>
    <div class="cuerpo">
        {{-- @foreach ($sliders as $post)
            <div class="slider ">

                <figure>

                    <div class="slide">
                        
                        @if ($post->image1)
                            <a href="{{ $post->info1 }}"></a>
                            <img src="{{ asset('images/' . $post->image1) }}" alt="...">
                        @else
                            <p>no hay foto</p>
                        @endif

                    </div>
                    <div class="slide">
                        
                        @if ($post->image2)
                            <a href="{{ $post->info2 }}"> <img src="{{ asset('images/' . $post->image2) }}"> </a>
                        @else
                            <p>no hay foto</p>
                        @endif
                    </div>




                
                </figure>

            </div>
        @endforeach --}}


        <div class="slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel"
                style="width: 100vw">

                <div class="carousel-inner" style="width: 100vw">
                    @foreach ($sliders as $index => $post)
                        <div class="carousel-item  @if ($index == 0) active @endif"
                            style="width: 100vw">
                            {{-- Imagen 1 --}}
                            @if ($post->image1)
                                <a href="{{ $post->info1 }}">
                                    <img src="{{ asset('images/' . $post->image1) }}" class="d-block w-100"
                                        alt="Imagen 1">
                                </a>
                            @else
                                <p>No hay imagen 1 disponible</p>
                            @endif
                        </div>



                        <div class="carousel-item">
                            {{-- Imagen 2 --}}
                            @if ($post->image2)
                                <a href="{{ $post->info2 }}">
                                    <img src="{{ asset('images/' . $post->image2) }}" class="d-block w-100"
                                        alt="Imagen 2">
                                </a>
                            @else
                                <p>No hay imagen 2 disponible</p>
                            @endif
                        </div>
                    @endforeach
                    <div>
                        {{-- Botones de control de navegación --}}
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>

                    </div>
                </div>




            </div>
            {{-- Botón encima del slider --}}
            <div class="imagencentrado">
                <a href="login" class="btn-buscar-outfit">BUSCAR OUTFIT</a>
            </div>
        </div>


        {{-- <div class="imagencentrado"> --}}
        <!-- <img src="/img/logo I KAN blanco.png" alt="">  -->
        {{-- <a href="login">BUSCAR OUTFIT</a> --}}
        {{-- </div> --}}


        <script src="i kan.js"></script>
        <div class="tendencias">
            <h2>TENDENCIAS</h2>
        </div>
        <div class="contenedor">
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/1.jpg" alt="">
                <div class="overlays">
                    <p>Estilo Clasico</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/2 (3).jpg" alt="">
                <div class="overlays">
                    <p>Estilo Casual</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/3.jpg" alt="">
                <div class="overlays">
                    <p>Outlet</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/4.jpg" alt="">
                <div class="overlays">
                    <p>Estilo Casual</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/5.jpg" alt="">
                <div class="overlays">
                    <p>Estilo Urbano</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/6.jpg" alt="">
                <div class="overlays">
                    <p>Estilo Clasico</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/7.jpg" alt="">
                <div class="overlays">
                    <p>Estilo Clasico</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/8.jpg" alt="">
                <div class="overlays">
                    <p>Estilos</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/9.jpg" alt="">
                <div class="overlays">
                    <p>Estilo Urbano</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/10.jpg" alt="">
                <div class="overlays">
                    <p>Estilo Clasico</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/11.jpg" alt="">
                <div class="overlays">
                    <p>Estilo Casual</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/GALERIA IMG1/12.jpg" alt="">
                <div class="overlays">
                    <p>Boda</p>
                </div>
            </div>
        </div>

        <br>
        <div class="Carousel">
            <h2 style="color: white">Subcategory</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                        class="svg-inline--fa fa-chevron-left fa-w-10" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                        </path>
                    </svg>
                </button>
                <div class="slick-track" id="track">
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Enero</small>Año Nuevo</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/1.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Febrero</small>Amor Eterno</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/2.2.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Marzo</small>Flores Frescas</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/3.3.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Abril</small>Lluvias Suaves</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/4.4.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Mayo</small>Dias Soleados</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/5.5.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Junio</small>Verano Calido</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/6.6.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Julio</small>Noches Estrelladas</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/7.7 (2).jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Agosto</small>Vacaciones largas</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/8.8.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Septiembre</small>Amor y Amistad</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/9.9.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Octubre</small>Vuelta al Colegio</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/10.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Noviembre</small>Hojas Secas </h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/11.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Diciembre</small>Cielos Grises</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/12.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Primavera</small>Nieve Blanca</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/13.1 (2).jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Otoño</small>Flores</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/14.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="slick">
                        <div>
                            <a href="/">
                                <h4><small>Verano</small>Hojas</h4>
                                <picture>
                                    <img src="img/IMG HOME/imagenes Carrusel 2/15.1.jpg" alt="Image">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next"
                    onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
        <br>>
        <div class="Carousel">
            <h2 class=" text-white">Subcategory</h2>
        </div>
        <div class="contenedorr">
            <div class="box">
                <img src="img/IMG HOME/13.jpg" alt="">
                <div class="overlay">
                    <p>"La elegancia se encuentra en los detalles. Cada mirada, cada gesto y cada prenda cuentan una
                        historia de sofisticación y estilo único."</p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/14.jpg" alt="">
                <div class="overlay">
                    <p>"La sencillez nunca pasa de moda. Un estilo casual y relajado que combina la frescura del denim
                        con la confianza de quien lo lleva. Cada detalle cuenta cuando lo esencial es ser auténtico."
                    </p>
                </div>
            </div>
            <div class="box">
                <img src="img/IMG HOME/15.jpg" alt="">
                <div class="overlay">
                    <p>"Fuerza y estilo se unen en cada paso. Una actitud decidida, lista para conquistar el día,
                        mientras el look deportivo redefine la comodidad con un toque audaz y moderno."</p>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>
    @extends('layouts.footer')
</body>

</html>
