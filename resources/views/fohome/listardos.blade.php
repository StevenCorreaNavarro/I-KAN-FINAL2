<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}
    <title>Title</title>
</head>

<body>
    @extends('admin.layouts.app')
    @section('content')
        <center>
            <h1 style="background-color: rgb(220, 220, 220); color:rgb(53, 53, 53)">Imagen Para Slider Home</h1>
            {{-- <a href="{{ route('home.home') }}" class="btn btn-success  " style="backgrand-color:red;">Ir a home</a>
            <a href="{{ route('post.listar') }}" class="btn btn-success  " style="backgrand-color:red;">Ir a post</a>
            <a href="{{ route('post.create') }}" class="btn btn-success " style="backgrand-color:red;">Registrar Outfit</a> --}}

            
            <table class="table ">
                <td>
                    <h6 style="font-size: 15px">slider 1
                </td>
                <td>
                    <h6 style="font-size: 15px">slider 2
                </td>
                <td>
                    <h6 style="font-size: 15px">info 1
                </td>
                <td>
                    <h6 style="font-size: 15px">info 2
                </td>

                @foreach ($posts as $post)
                    <tr>
                        <td>
                            @if ($post->image1)
                                <img src="{{ asset('images/' . $post->image1) }}" class="" style="width: 70px;"
                                    alt="...">
                            @else
                                <p>no hay foto</p>
                            @endif
                        </td>
                        <td>
                            @if ($post->image2)
                                <img src="{{ asset('images/' . $post->image2) }}" class="" style="width: 70px;"
                                    alt="...">
                            @else
                                <p>no hay foto</p>
                            @endif
                        </td>

                        <td style="font-size: 15px">{{ $post->info1 }}</td>
                        <td style="font-size: 15px">{{ $post->info2 }}</td>

                        <td><a href="{{ route('slider.edit', $post->id) }}" class="btn btn-primary">Editar</a></td>
                        <td>
                            {{-- <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form> --}}
                        </td> -
                    </tr>
                @endforeach
            </table>

        </center>
    @endsection





    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
