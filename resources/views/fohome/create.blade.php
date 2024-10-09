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

<body style="background-color: #ffffff;">
    @extends('admin.layouts.app')
    @section('content')
        <h1 style="background-color: rgb(220, 220, 220); color:rgb(77, 77, 77)">Registra Outfit en Post</h1>
        {{-- <a href="{{ route('post.listardos') }}" class="btn btn-success " style="backgrand-color:red;">Lista Outfit</a> --}}
        {{-- home.home nombre de la ruta --}}

        <br>

        <div style=" display:flex; padding-bottom:400px; justify-content:center;  ">
            <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                <center>
                    @csrf {{-- token o seguridad  --}}

                    
                    <div class="form-group">
                        <label for="image1">
                            <h2>imagen slider 1</h2>
                        </label>
                        <br>
                        <input type="file" name="image1" id="image1" class="form-control">
                    </div>

                    <label class="form-label">
                        <h2>Link informacion slider 2</h2>
                        <input class="form-control" style="width: 300px;" type="text" name="info1">
                    </label>



                    <br><br>
                    <br>
                    <div class="form-group">
                        <label for="image2">
                            <h2>imagen slider 2</h2>
                        </label>
                        <br>
                        <input type="file" name="image2" id="image2" class="form-control">
                    </div>


                    <label class="form-label">
                        <h2>Link informacion slider 2</h2>
                        <input class="form-control" style="width: 300px;" type="text" name="info2">
                    </label>



                    <br><br>
                    <button class="btn btn-primary" type="submit">Enviar Formulario:</button>
                </center>
            </form>
        </div>
    @endsection

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
