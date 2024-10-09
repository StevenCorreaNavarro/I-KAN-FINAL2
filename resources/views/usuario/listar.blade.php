<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
    <body>
        <h1>Listar usuarios:</h1>
        <a href="{{route('home.home')}}" class="btn btn-primary " style="backgrand-color:red;">Ir a home</a> {{-- home.home nombre de la ruta--}}
        <br>
        <br>
        <table class="table">
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->email }}</td> 
                    <td>{{ $usuario->password }} </td>
                    <td><a href="{{route('usuario.show', $usuario->id) }}">Mostrar</a></td>
                    <td><a href="{{route('usuario.edit',$usuario->id)}}">Editar</a></td>
                    <td>
                        <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>