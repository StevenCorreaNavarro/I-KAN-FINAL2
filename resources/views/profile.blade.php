<!-- resources/views/profile.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <title>Title</title>
</head>

<body style="
background: linear-gradient(#323534, #606161,#444847,#444847);
background-attachment: fixed;
background-size: cover;">
    <div class="position-relative">
        {{-- hola
        @foreach ($usuarios as $post)
            @if ($post->profile_image)
                <img src="{{ asset('images/' . $post->profile_image) }}" alt="...">
            @endif
        @endforeach --}}
        <div class="  caja position-absolute top-0 start-50 translate-middle-x" style="border-radius:10px; ">
            <center>
                {{-- <img src="{{ asset('storage/' . $usuario->foto_perfil) }}"  /> --}}
                {{-- <img src="{{ Storage::url($usuario->foto_perfil) }}"  /> --}}

                {{-- 
            @if (Auth::user()->profile_image)
                <img src="{{ 'images/' . Auth::user()->profile_image }}" alt="User Photo">
            @else
                <p>No photo available.</p>
            @endif --}}

                {{-- <h1>Perfil</h1> --}}
                {{-- <img src="{{ ('images/' . Auth::user()->profile_image) }}" alt="Foto de perfil" class="profile-img"> --}}
                {{-- <div class="avatar-sm float-left mr-2">
                <img src="{{ asset('atlantis/assets/img/perfil.jpg') }}" alt="..."
                    class="avatar-img rounded-circle " style="width: 30%">
            </div> --}}
                @if (Auth::user()->profile_image)
                    <img src="{{ asset('storage/' . Auth::user()->profile_image) }}"
                        alt="Foto de perfil de {{ Auth::user()->name }}" />
                @else
                    <img src="{{ asset('atlantis/assets/img/perfil.jpg') }}" style="width: 50%; border-radius:100px"
                        alt="Foto de perfil predeterminada" />
                @endif


                {{-- <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Profile Image"> --}}
                <h3>Welcome</h3>
                <h1>Usuario: {{ Auth::user()->name }}!</h1>
                <p>correo electronico: {{ Auth::user()->email }}</p>
                <br><br>
                {{-- <img src="{{ Storage::url(Auth::user()->profile_image) }}" alt="Foto de perfil" class="profile-img"> --}}


                <!-- resources/views/profile.blade.php -->
                {{-- <h1>Perfil de {{ Auth::user()->name }}</h1>

            <img src="{{ asset('storage/' . Auth::user()->profile_image) }}" alt="Foto de perfil" class="profile-img"> --}}

                {{-- <img src="{{ (Storage::url() . Auth::user()->profile_image) }}"/> --}}

                <!-- En el archivo Blade (por ejemplo, profile.blade.php) -->
                {{-- <h1>Perfil de {{ Auth::user()->name }}</h1>

        

            <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : asset('images/default_profile.png') }}"
                alt="Foto de perfil" /> --}}

            </center>
        </div>



        <!-- En tu archivo Blade (perfil.blade.php) -->
        {{-- <h1>Perfil de {{ $usuario->nombre }}</h1> --}}

    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
