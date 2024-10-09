@extends('layouts.prueba2')

@section('content')
<div class="container">
    <div class="row">
        hola desde extencion
        {{-- @foreach($options as $option) <!-- Asegúrate de usar 'options' aquí -->
            <div class="col-md-3">
                <form action="{{ route('options.select', $option->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ $option->name }}</button>
                </form>
            </div>
        @endforeach --}}
    </div>
</div>
@endsection
!