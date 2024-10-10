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

<body style="
  background: linear-gradient(#323534, #606161,#444847,#444847);
background-attachment: fixed;
background-size: cover;">

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
            @foreach ($units as $unit)
                <div class="tablauno">
                    <div class="tablados">
                        <div class="tablatres" style="background-color: rgba(255, 255, 255, 0.496)">
                            <center>
                                <div class="tablaimg">
                                    {{-- en esta parte es para visualizar la imagen subida --}}
                                    @if ($unit->image)
                                        <img src="{{ 'images/' . $unit->image }}" alt="" >
                                    @endif
                                    <br>
                                    <br>
                                    <h1>{{ $unit->nombre }}</h1>
                                    
                                </div>
                            </center>
                        </div>
                        <div class="tablatext">
                            <div>
                                <p>
                                    {{ $unit->descrip }}
                                </p>
                            </div><div>
                                <br><center><a href="ubicacion">Ubicacion</a></center>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </table>

        <br><br><br><br><br>


























        @extends('layouts.footer')
</body>

</html>
