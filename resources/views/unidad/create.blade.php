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
    @extends('admin.layouts.app')
    @section('content')
        <center>
            <h1 style="background-color: rgb(220, 220, 220); color:rgb(77, 77, 77)">Registra una tienda oficial </h1>
            <br>
            <br>



            <div style=" display:flex; padding-bottom:400px; justify-content:center;  ">
                <form action="{{ route('unit.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf {{-- token o seguridad  --}}
                    <label class="form-label">
                        <h4>Nombre de la tienda</h4>
                        <input class="form-control" type="text" style="width: 300px" name="nombre" class="form-control">
                    </label>
                    <br><br>
                    <label class="form-label">
                        <h4>Descripcion de la tienda</h4>
                        <input class="form-control" style="width: 300px; height:200px" type="text" name="descrip">
                    </label>
                    <br><br>
                    <label class="form-label">
                        <h4>ubicacion</h4>
                        <input class="form-control" style="width: 300px;" type="text" name="ubica">
                    </label>
                    <br><br>
                    <div>
                        <label for="image">Imagen</label>
                        <br>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>


                    <br><br>
                    <button class="btn btn-primary" type="submit">Enviar Formulario:</button>

                </form>
            </div>
        </center>
    @endsection



</body>

</html>
