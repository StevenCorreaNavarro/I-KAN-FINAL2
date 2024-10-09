@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('cuenta') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div>
                            <center>
                                <h1>Welcome</h1>
                                <p>usuario: {{ Auth::user()->name }}!</p>
                                <p>correo electronico: {{ Auth::user()->email }}</p>
                                {{ __('You are logged in!') }}
                            </center>
                        </div>
                        <br><br>
                        <center>
                            <div>
                                <a href="home" class="active"><button> ir a nicio </button></a>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
