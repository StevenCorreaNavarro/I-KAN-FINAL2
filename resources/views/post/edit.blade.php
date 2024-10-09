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
        <div style=" display:flex; padding-bottom:400px; justify-content:center;  ">
            <form action="{{ route('post.update', $post) }}" method="POST" enctype="multipart/form-data"
                style="background-color: rgb(220, 220, 220); margin:50px; border-radius:10px; ">
                <br><br>
                <h1>Actualizar Post</h1>
                @csrf
                <br><br>

                <div>
                    @if ($post->image)
                        <img src="{{ asset('images/' . $post->image) }}" class="" style="width: 150px;"
                            alt="...">
                    @else
                        <p>no hay foto</p>
                    @endif
                </div>
                <br><br>
                @method('put')
                <label class="form-label">
                    <h2>Nombre tienda</h2>
                    <br>
                    <input class="form-control" type="text" name="nombre" value="{{ old('email', $post->nombre) }}">
                </label>
                <br><br>
                <label class="form-label">
                    <h2>Tipo</h2>
                    <br>
                    <input class="form-control" type="text" name="tipo" value="{{ old('tipo', $post->tipo) }}">
                </label>
                <br><br>
                <label class="form-label">
                    <h2>Link accesorio</h2>

                    <p class="text-break"></p>
                    <input class="form-control text-break" type="text" name="descrip1"
                        style="width: 300px; height:100px;" value="{{ old('descrip1', $post->descrip1) }}">
                </label>
                <br><br>
                <label class="form-label">
                    <h2>Link prenda superior</h2>

                    <p class="text-break"></p>
                    <input class="form-control text-break" type="text" name="descrip2"
                        style="width: 300px; height:100px;" value="{{ old('descrip2', $post->descrip2) }}">
                </label>
                <br><br>
                <label class="form-label">
                    <h2>Link prenda inferior</h2>

                    <p class="text-break"></p>
                    <input class="form-control text-break" type="text" name="descrip3"
                        style="width: 300px; height:100px;" value="{{ old('descrip3', $post->descrip3) }}">
                </label>
                <br>
                <label class="form-label">
                    <h2>Calzado</h2>

                    <p class="text-break"></p>
                    <input class="form-control text-break" type="text" name="descrip4"
                        style="width: 300px; height:100px;" value="{{ old('descrip4', $post->descrip4) }}">
                </label>

                <br>
                <label class="form-label">
                    <h2>Informacion</h2>

                    <p class="text-break"></p>
                    <input class="form-control text-break" type="text" name="info"
                        style="width: 300px; height:100px;" value="{{ old('info', $post->info) }}">
                </label>

                <br>
                <label class="form-label">
                    <h2>Ubicacion en el mapa</h2>

                    <input class="form-control" type="text" name="ubica" value="{{ old('ubica', $post->ubica) }}">
                </label>
                <br><br>
                <label class="form-label">
                    <h2>Foto modelo</h2>

                    <input class="form-control" type="file" name="image" value="{{ old('image', $post->image) }}">
                </label>
                <br>

                <br>


                <button class="btn btn-success" type="submit">Enviar Formulario:</button>
                <br><br><br>
            </form>

        </div>

    </center>
@endsection

{{-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>

</body>

</html>
