<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
    <title>Lista Post</title>
</head>

<body>
    @extends('admin.layouts.app')
    @section('content')
        <center>
            <h1 style="background-color: rgb(220, 220, 220); color:rgb(53, 53, 53)">Lista Post</h1>
            {{-- <a href="{{ route('home.home') }}" class="btn btn-success  " style="backgrand-color:red;">Ir a home</a>
        <a href="{{ route('post.listar') }}" class="btn btn-success  " style="backgrand-color:red;">Ir a post</a>
        <a href="{{ route('post.create') }}" class="btn btn-success " style="backgrand-color:red;">Registrar Outfit</a> --}}

            <table class="caption-top">
                <td>
                    
                </td>
                <td>

                </td>
                <td>
                    <h6 style="font-size: 15px">Id
                </td>
                <td>
                    <h6 style="font-size: 15px">Foto modelo
                </td>
                <td>
                    <h6 style="font-size: 15px">Nombre de tienda
                </td>
                <td>
                    <h6 style="font-size: 15px">tipo
                </td>
                <td>
                    <h6 style="font-size: 15px">Accesorios
                </td>
                <td>
                    <h6 style="font-size: 15px">prenda superior
                </td>
                <td>
                    <h6 style="font-size: 15px">Prenda inferior
                </td>
                <td>
                    <h6 style="font-size: 15px">Prenda calzado
                </td>
                <td>
                    <h6 style="font-size: 15px">Informacion
                </td>
                <td>
                    <h6 style="font-size: 15px">Ubicacion mapa
                </td>
                @foreach ($posts as $post)
                    <tr>
                        
                        <td></td>
                        <td style="font-size: 15px; width:30px; ">{{ $post->id }}</td>
                        <td>
                            @if ($post->image)
                                <img src="{{ asset('images/' . $post->image) }}" class="" style="width: 70px;"
                                    alt="...">
                            @else
                                <p>no hay foto</p>
                            @endif
                        </td>

                        <td style="font-size: 15px">{{ $post->nombre }}</td>
                        <td style="font-size: 15px">{{ $post->tipo }}</td>
                        <td style="font-size: 15px">{{ $post->descrip1 }}</td>
                        <td style="font-size: 15px">{{ $post->descrip2 }}</td>
                        <td style="font-size: 15px">{{ $post->descrip3 }}</td>
                        <td style="font-size: 15px">{{ $post->descrip4 }}</td>
                        <td style="font-size: 15px">{{ $post->info }}</td>
                        <td style="font-size: 15px">{{ $post->ubica }} </td>
                        <td><a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary">Editar</a></td>
                        <td>
                            <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        </center>
    @endsection





    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
