<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="shortcut icon" href="img/LOGOS BLANCO Y NEGRO/BLANCO.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/tiendas.css') }}"><!-- llamado de la seccion de estilos --> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/ocasion.css') }}"> --}}
    <title>I KAN</title>
</head>

<body
    style="
background: linear-gradient(#323534, #606161,#444847,#444847);
background-attachment: fixed;
background-size: cover;">


    @extends('layouts.app') <br><br>
    <br><br>
    {{-- <div class="caj">
        @foreach ($posts as $post)
            <div class="cajita" style="background-color: rgb(255, 255, 255); width:25vw ; margin:4%;">
                <div c>
                    <div class="enc">
                        <h4>{{ $post->nombre }}</h4>
                        <h4 style="font-size: 80%">{{ $post->tipo }}</h4>
                    </div>
                    
                </div>
                <div style="position:relative;"> 
                    @if ($post->descrip1)
                        <div class="gafas">
                            <a href="{{ $post->descrip1 }}">Ver Accesorios
                            </a>
                        </div>
                    @else
                    @endif
                    <div class="blusa">
                        <a href="{{ $post->descrip2 }}">Ver blusa
                        </a>
                    </div>
                    <div class="pantalon">
                        <a href="{{ $post->descrip3 }}"> Ver pantalon
                        </a>
                    </div>
                    <div class="calzado">
                        <a href="{{ $post->descrip4 }}">Ver calzado
                        </a>
                    </div>
                    @if ($post->image)
                    <img src="{{ asset('images/' . $post->image) }}" class="" alt="...">
                @endif
                </div>
                
                <div style=" padding: 10px; color:black">
                    <i class="bi bi-geo-alt-fill"><a href="{{ $post->ubica }}"> Ubicacion
                        </a></i>
                </div>
                <div class="d-flex " style=" padding: 10px;">
                    <div style="padding:5px;">
                        <i class="bi bi-heart"></i>
                    </div>
                    <div style=" padding: 5px;">
                        <i class="bi bi-box-seam"></i>
                    </div>
                </div>
            </div>
            <br>
        @endforeach 
    </div> --}}
    <div>

        <select id="filtro" class="filtu">
            <option value="todos">Todos</option>
            <option value="clasico">Clasico</option>
            <option value="urbano">Urbano</option>
            <option value="casual">Casual</option>
            <option value="deportivo">Deportivo</option>
        </select>


        <div class="caj">
            @foreach ($posts as $post)
                <div class="cajita {{ $post->tipo }}"
                    style="background-color: rgb(255, 255, 255); width:25vw ; margin:1%;">
                    <!-- Contenido del post -->
                    <div>
                        <div class="enc">
                            <h4>{{ $post->nombre }}</h4>
                            <h4 style="font-size: 80%">{{ $post->tipo }}</h4>
                        </div>
                    </div>
                    <div style="position:relative;">
                        @if ($post->descrip1)
                            <div class="gafas">
                                <a href="{{ $post->descrip1 }}">Ver Accesorios</a>
                            </div>
                        @endif
                        <div class="blusa">
                            <a href="{{ $post->descrip2 }}">Prenda Superior</a>
                        </div>
                        <div class="pantalon">
                            <a href="{{ $post->descrip3 }}">Prenda Inferior</a>
                        </div>
                        <div class="calzado">
                            <a href="{{ $post->descrip4 }}">Ver calzado</a>
                        </div>
                        @if ($post->image)
                            <img src="{{ asset('images/' . $post->image) }}" alt="...">
                        @endif
                    </div>
                    <div style="padding: 10px; color:black">
                        <i class="bi bi-geo-alt-fill"><a href="{{ $post->ubica }}">Ubicacion</a></i>
                    </div>

                    <div style="padding-left: 10px; color:black ">
                        <p style="font-size:80%">{{ $post->info }}</p>
                    </div>
                    <div class="d-flex" style="padding: 10px;">
                        {{-- <div style="padding:5px;">
                            <i class="bi bi-heart"></i>
                        </div> --}}

                        <div id="post-{{ $post->id }}">
                            <!-- Contenido del div -->
                            <i class="bi bi-heart" onclick="favPost({{ $post->id }})"> </i>me gusta!
                            {{-- <button onclick="favPost({{ $post->id }})">Like</button> --}}
                        </div>


                    </div>
                </div>
                <br>
            @endforeach

        </div>








        <script>
            document.getElementById('filtro').addEventListener('change', function() {
                let filtro = this.value;
                let elementos = document.querySelectorAll('.cajita');

                elementos.forEach(function(elemento) {
                    if (filtro === 'todos') {
                        elemento.style.display = 'block';
                    } else if (elemento.classList.contains(filtro)) {
                        elemento.style.display = 'block';
                    } else {
                        elemento.style.display = 'none';
                    }
                });
            });


            function favPost(postId) {
                fetch('fav', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            post_id: postId
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            alert('¡Favorito guardado con éxito!');
                        }
                    });
            }
        </script>

    </div>




    {{-- <div class="elemento nombre2">Elemento 2 - Nombre 2</div>
    <div class="elemento nombre3">Elemento 3 - Nombre 3</div>
    <div class="elemento nombre4">Elemento 4 - Nombre 4</div> --}}

    {{-- <div class="elemento nombre1">Elemento 1 - Nombre 1</div>
    <div class="elemento nombre2">Elemento 2 - Nombre 2</div>
    <div class="elemento nombre3">Elemento 3 - Nombre 3</div>
    <div class="elemento nombre4">Elemento 4 - Nombre 4</div> --}}


    {{-- <script>
        document.getElementById('filtro').addEventListener('change', function() {
            let filtro = this.value;
            let elementos = document.querySelectorAll('.elemento');

            elementos.forEach(function(elemento) {
                if (filtro === 'todos') {
                    elemento.style.display = 'block';
                } else if (elemento.classList.contains(filtro)) {
                    elemento.style.display = 'block';
                } else {
                    elemento.style.display = 'none';
                }
            });
        });
    </script> --}}
    <section>
        <script>
            < script src = "https://cdn.jsdelivr.net/npm/sweetalert2@11" >
        </script>
        </script>
        <script>
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                }
            });
        </script>
    </section>





    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <br><br><br><br><br>
    @extends('layouts.footer')
</body>

</html>
