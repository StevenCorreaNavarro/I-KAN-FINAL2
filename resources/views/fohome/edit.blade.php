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
            <form action="{{ route('slider.update', $post) }}" method="POST" enctype="multipart/form-data"
                style="background-color: rgb(220, 220, 220); margin:50px; border-radius:10px; ">
                <br><br>
                <h1>Actualizar Slider</h1>
                @csrf
                <br><br>

                <div>
                    @if ($post->image1)
                        <img src="{{ asset('images/' . $post->image1) }}" class="" style="width: 350px;"
                            alt="...">
                    @else
                        <p>no hay foto</p>
                    @endif
                
                    @if ($post->image2)
                        <img src="{{ asset('images/' . $post->image2) }}" class="" style="width: 350px;"
                            alt="...">
                    @else
                        <p>no hay foto</p>
                    @endif
                </div>

                <br><br>
                @method('put')
                <label class="form-label">
                    <h2>image 1</h2>
                    <input class="form-control" type="file" name="image1" value="{{ old('image1', $post->image1) }}">
                </label>
                <label class="form-label">
                    <h2>Link slider 1</h2>
                    <input class="form-control" type="text" name="info1" value="{{ old('info1', $post->info1) }}">
                </label>
                
                <br><br>
                <label class="form-label">
                    <h2>imagen 2</h2>

                    <input class="form-control" type="file" name="image2" value="{{ old('image2', $post->image2) }}">
                </label>
                <label class="form-label">
                    <h2>imagen 2</h2>
                    <input class="form-control" type="text" name="info2" value="{{ old('info2', $post->info2) }}">
                </label>
                <br><br>
                
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
