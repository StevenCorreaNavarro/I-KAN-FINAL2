
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
    @yield('content') 
    @extends('admin.layouts.app')
    @section('content')
        <center>
            <h1 style="background-color: rgb(220, 220, 220); color:rgb(53, 53, 53)">Listar de tiendas soficiales</h1>
            {{-- <a href="{{ route('home.home') }}" class="btn btn-primary " style="backgrand-color:red;">Ir a home</a> --}}
            {{-- home.home nombre de la ruta --}}
            {{-- <a href="{{ route('unit.create') }}" class="btn btn-primary " style="backgrand-color:red;">Registrar una --}}
                {{-- tienda</a>  home.home nombre de la ruta  --}}
            <br>
            <br>
            <table class="table">
                <td>
                    <h4>Id
                </td>
                <td>
                    <h4>Tiendas oficiales
                </td>
                <td>
                    <h4>Descripcion
                </td>
                <td>
                    <h4>coordenadas
                </td>
                @foreach ($units as $unit)
                    <tr>
                        <td>{{ $unit->id }}</td>
                        <td>{{ $unit->nombre }}</td>
                        <td>{{ $unit->descrip }}</td>
                        <td>{{ $unit->ubica }} </td>
                        <td><a href="{{ route('unit.edit', $unit->id) }} " class="btn btn-primary">Editar</a></td>
                        <td>
                            <form action="{{ route('unit.destroy', $unit->id) }}" method="POST">
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
