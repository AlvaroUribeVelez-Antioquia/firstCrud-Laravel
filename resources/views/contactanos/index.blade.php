@extends('layouts.plantilla')

@section('title','Contactanos')

@section('content')
    <h1>[Envíanos un mensaje]</h1>

    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label>
            Nombre
            <br>
            <input type="text" name="name">
            @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        </label>
        <br>

        <label>
            Correo
            <br>
            <input type="text" name="correo">
            @error('correo')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </label>
        <br>
        
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
            @error('mensaje')
            <br>
            <small>*{{$message}}</small>
            <br>
            @enderror
        </label>
        <br>

        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>    

    @endif

@endsection

