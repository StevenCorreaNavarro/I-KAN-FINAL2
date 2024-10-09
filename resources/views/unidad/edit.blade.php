<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    @extends('admin.layouts.app')
    @section('content')
    

    <center>
        <h1 style="background-color: rgb(220, 220, 220); color:rgb(53, 53, 53)">Actualizar tiendas</h1>
        <form action="{{ route('unit.update', $unit) }}" method="POST" enctype="multipart/form-data"
            style="background-color: rgba(247, 247, 247, 0);margin:100px; border-radius:10px;">
            
            

            @csrf
            @method('put')
            <label class="form-label">
                Nombre:
                <br>
                <input class="form-control" type="text" name="nombre" value="{{ old('email', $unit->nombre) }}" style="width: 300px; height:200px;>
            </label>
            <br>
            <label class="form-label">
                Descripcion:
                <br>
                <p class="text-break"></p>
                <input class="form-control text-break" type="text" name="descrip" style="width: 300px; height:200px;"
                    value="{{ old('descrip', $unit->descrip) }}">
            </label>

            <br>
            <label class="form-label">
                Ubicacion:
                <br>
                <input class="form-control" type="text" name="ubica" value="{{ old('ubica', $unit->ubica) }}" style="width: 300px; height:200px;>
            </label>
            <br>
            <label class="form-label">
                Imagen:
                <br>
                <input class="form-control" type="file" name="image" value="{{ old('image', $unit->image) }}">
            </label>
            <br>

            <br>

            <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
            <br><br><br>
        </form>
    </center>
    @endsection
</body>

{{-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>
